<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form','url'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
            $this->session = session();
	}
    
    public function aerobic()
    {
            $this->poziv('aerobic',[]);
    }
    
    public function body_pump()
    {
            $this->poziv('body_pump',[]);
    }
    
    public function cardio()
    {
            $this->poziv('cardio',[]);
    }
    
    public function classesSingle()
    {
            $this->poziv('classes-single',[]);
    }
    
    public function classes()
    {
            $this->poziv('classes',[]);
    }
    
    public function contact()
    {
            $this->poziv('contact',[]);
    }
    
    public function funkcionalni()
    {
            $this->poziv('funkcionalni',[]);
    }
    
    public function grupni_treninzi()
    {
            $this->poziv('grupni_treninzi',[]);
    }
    
    public function individualni_treninzi()
    {
            $this->poziv('individualni_treninzi',[]);
    }
    
    public function karate()
    {
            $this->poziv('karate',[]);
    }
    
    public function snaga()
    {
            $this->poziv('snaga',[]);
    }
    
    public function schedule()
    {
            $this->poziv('schedule',[]);
    }
    
    public function yoga()
    {
            $this->poziv('yoga',[]);
    }
    
    public function o_trenerima()
    {
            $this->poziv('o_trenerima',[]);
    }
    
     public function o_sponzorima()
    {
            $this->poziv('o_sponzorima',[]);
    }
    
    public function blog()
    {
            $this->poziv('blog',[]);
    }

}
