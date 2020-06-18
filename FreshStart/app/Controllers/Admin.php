<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ZahtevKorisnikModel;
use App\Models\ZahtevBlogModel;
use App\Models\KorisnikModel;
use App\Models\BlogModel;


class Admin extends BaseController
{
    protected function poziv($page,$data) {
        $data['controller']='Admin';
        echo view('sabloni/header_adm');
        echo view("stranice/$page",$data);
        echo view('sabloni/footer');
    }
         
    public function index(){
            $this->poziv('admin_meni',[]);
    }
    
    public function logout() {
        $this->session->destroy();
        return redirect()->to(site_url('/'));
    }
    
    public function zahtevikorisnika(){
            $zahtevKorModel = new ZahtevKorisnikModel();
            $zahtevKor = $zahtevKorModel->where('tip', 3)->findAll();
            $zahtevSpo = $zahtevKorModel->where('tip', 1)->findAll();
            $zahtevTre = $zahtevKorModel->where('tip', 2)->findAll();
            $this->poziv('zahtevikorisnika',['zahtevKor' => $zahtevKor,'zahtevSpo' => $zahtevSpo,'zahtevTre' => $zahtevTre]);
    }
    
    
  /* public function prihvati($korIme,$email,$loz,$tip,$vip,$pogodnost,
           $ime,$prezime,$datum,$visina,$tezina,$imefirme,$del,$rek,$cilj,$kurs){
       $db=db_connect();
            $zahtevKorModel = new ZahtevKorisnikModel();
            $KorModel = new KorisnikModel();
             $db->transStart();
            $KorModel->insert([
                "KorisnickoIme"=>$korIme,
                "email" => $email,
                "loznika" => $loz,
                "tip" => $tip,
                "VIP" => $vip,
                "pogodnosti" => $pogodnost,
                "ime" =>  $ime,
                "prezime" => $prezime,
                "datumrodj" =>  $datum,
                "visina" =>  $visina,
                "tezina" =>  $tezina,
                "imefirme" => $imefirme,
                "opisdel" => $del,
                "vrstarek" => $rek,
                "cilj" =>  $cilj,
                "kurs" => $kurs
            ]);
            $zahtevKorModel->where("KorisnickoIme", $korIme)->delete();
            
             $db->transComplete();
    }*/
    
    public function prihvati(){
        helper(['form', 'url']);
         
        $db= \Config\Database::connect();
        $builder =$this-> $db->table('zahtevkorisnik');
        $builder2 = $this->$db->table('korisnik');
        
        $data = [
            'KorisnickoIme'=>$this->request->getVar('KorisnickoIme'),
            'email' => $this->request->getVar('email'),
            'loznika' => $this->request->getVar('lozinka'),
            'tip' => $this->request->getVar('tip'),
            'VIP' => $this->request->getVar('VIP'),
            'pogodnosti' => $this->request->getVar('pogodnost'),
            'ime' =>  $this->request->getVar('ime'),
            'prezime' => $this->request->getVar('prezime'),
            'datumrodj' =>  $this->request->getVar('datumrodj'),
            'visina' =>  $this->request->getVar('visina'),
            'tezina' =>  $this->request->getVar('tezina'),
            'imefirme' => $this->request->getVar('imefirme'),
            'opisdel' => $this->request->getVar('opisdel'),
            'vrstarek' => $this->request->getVar('vrstarek'),
            'cilj' =>  $this->request->getVar('cilj'),
            'kurs' => $this->request->getVar('kurs'),
            ];
        $save = $builder2->insert($data);
        
        
        $data = [
            'success' => true,
            'data' => $save
        ];
        
        return $this->response->setJSON($data);
    
    }
    
    
   public function odbij(){
         $zahtevKorModel = new ZahtevKorisnikModel();
         $zahtevKorModel->where("KorisnickoIme", $korIme)->delete();
    }
    
      public function admin_meni(){
            $this->poziv('admin_meni',[]);
    }
    
   public function promenastatusa(){
         $promenaModel = new KorisnikModel();
            $statusi = $promenaModel->where( 'tip',3 )->where( 'VIP',NULL)->findAll();
        $this->poziv('promenastatusa',['statusi' => $statusi]);

        
     //   $this->promena();       

    }   
    
  /*  public function promena(){
        $kor=new KorisnikModel();
        $korisnik=$this->request->find('KorisnickoIme');
        $kor->insert($korisnik,['VIP'=>$this->request->getVar('1')]);
        return redirect()->to(base_url('/promenastatusa'));
    }*/
    
    
    
    public function brisanjekorisnika(){
            $korisnik = new KorisnikModel();
            $korisnici = $korisnik->findAll();
            $this->poziv('brisanjekorisnika',['korisnici' => $korisnici]);
    }
    
    public function obrisi(){
       $kormod = new KorisnikModel();
       $kor=$kormod->find();
         $kormod->where('KorisnickoIme', $kor)->delete();
       /*  $korisnik = new KorisnikModel();
         $korisnici = $korisnik->findAll();
         $this->poziv('brisanjekorisnika',['korisnici' => $korisnici]);*/
    }
    
    
    public function zahtevizablog(){
            $blogModel = new ZahtevBlogModel();
            $zahteviBlog = $blogModel->findAll();
            $this->poziv('zahtevizablog',['zahteviBlog' => $zahteviBlog]);
    }
    
    public function tekstzahtev($id){
        $blogModel=new ZahtevBlogModel();
        $blog=$blogModel->find($id);
        $this->poziv('tekstzahtev',['blog'=>$blog]);
        
    } 
    
    public function prihvatiOdbijBlog($id) {
        
        if($this->request->getVar('prihvati')){
            $this->prihvatiBlog($id);
        }else{
            $this->odbijBlog($id);
        }
    }
    
    public function odbijBlog($id) {
        $blogModel=new ZahtevBlogModel();
        $blogModel->where('BlogID',$id)->delete();
        return redirect()->to(site_url("Admin/zahtevizablog"));
    }
    
    public function prihvatiBlog($id) {
        $blogModel=new ZahtevBlogModel();
        $noviBlog=new BlogModel();
        $noviblog->insert(['BlogID'=>$id, 'naslov'=>$this->request->getVar('naslov'),'tekst'=>$this->request->getVar('tekst'), 'KorisnickoIme'=>$this->request->getVar('korisnickoIme')]);
        $blogModel->delete($id);
    }
    
    public function adminblog() {
            $this->poziv('adminblog',[]);
    }
    
    public function proveriBlog(){
        if(!$this->validate(['naslov'=>'required','tekstbloga'=>'required'])){
            return $this->poziv('adminblog',['errors'=>$this->validator->getErrors()]);
        }
        $noviblog= new BlogModel();
       
        
        $noviblog->insert(['BlogId'=>$noviblog->getInsertID(), 'naslov'=>$this->request->getVar('naslov'),'tekst'=>$this->request->getVar('tekstbloga'),'KorisnickoIme'=>$this->session->get('KorisnickoIme')->KorisnickoIme]);
    
        return redirect()->to(site_url("Admin/adminblog"));
    }
           
        
        
        
        


}
