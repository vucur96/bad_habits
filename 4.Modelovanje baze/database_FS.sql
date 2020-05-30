
CREATE TABLE [ADMIN]
( 
	[KorisnickoIme]      varchar(20)  NOT NULL ,
	[Lozinka]            varchar(16)  NULL 
)
go

CREATE TABLE [BLOG]
( 
	[BlogID]             uniqueidentifier  NOT NULL ,
	[Naslov]             varchar(60)  NULL ,
	[Tekst]              text  NULL ,
	[KorisnickoIme]      varchar(20)  NULL 
)
go

CREATE TABLE [CLANARINA]
( 
	[KorisnickoIme]      varchar(20)  NOT NULL ,
	[Datum]              datetime  NULL ,
	[VIP]                bit  NULL ,
	[Brisanje]           bit  NULL 
)
go

CREATE TABLE [KORISNIK]
( 
	[KorisnickoIme]      varchar(20)  NOT NULL ,
	[E_mail]             varchar(40)  NULL ,
	[Lozinka]            varchar(16)  NULL ,
	[VIP]                bit  NULL ,
	[Pogodnost]          varchar(50)  NULL ,
	[Korisnik]           bit  NULL ,
	[Trener]             bit  NULL ,
	[Sponzor]            bit  NULL ,
	[Ime]                varchar(20)  NULL ,
	[Prezime]            varchar(20)  NULL ,
	[DatumRodjenja]      datetime  NULL ,
	[Visina]             float  NULL ,
	[Tezina]             float  NULL ,
	[Cilj]               varchar(40)  NULL ,
	[Kurs]               varchar(40)  NULL ,
	[ImeFirme]           varchar(20)  NULL ,
	[OpisDelatnosti]     varchar(60)  NULL ,
	[VrstaReklame]       varchar(40)  NULL 
)
go

CREATE TABLE [PRIJAVLJEN]
( 
	[KorisnickoIme]      varchar(20)  NOT NULL ,
	[TreID]              uniqueidentifier  NOT NULL 
)
go

CREATE TABLE [RASPORED]
( 
	[RasID]              uniqueidentifier  NOT NULL ,
	[TreID]              uniqueidentifier  NOT NULL ,
	[Grupni]             bit  NULL ,
	[Individualni]       bit  NULL ,
	[Mesec]              integer  NULL 
)
go

CREATE TABLE [TRENING]
( 
	[TreID]              uniqueidentifier  NOT NULL ,
	[Naziv]              varchar(20)  NULL ,
	[MaxBroj]            integer  NULL ,
	[Zauzeto]            bit  NULL ,
	[Trener]             varchar(20)  NOT NULL 
)
go

CREATE TABLE [ZAHTEV_BLOG]
( 
	[BlogID]             uniqueidentifier  NOT NULL ,
	[Naslov]             varchar(60)  NULL ,
	[Tekst]              text  NULL ,
	[KorisnickoIme]      varchar(20)  NOT NULL 
)
go

CREATE TABLE [ZAHTEV_KORISNIK]
( 
	[KorisnickoIme]      varchar(20)  NOT NULL ,
	[E_mail]             varchar(40)  NULL ,
	[Lozinka]            varchar(16)  NULL ,
	[VIP]                bit  NULL ,
	[Pogodnost]          varchar(50)  NULL ,
	[Korisnik]           bit  NULL ,
	[Trener]             bit  NULL ,
	[Sponzor]            bit  NULL ,
	[Ime]                varchar(20)  NULL ,
	[Prezime]            varchar(20)  NULL ,
	[DatumRodjenja]      datetime  NULL ,
	[Visina]             float  NULL ,
	[Tezina]             float  NULL ,
	[Cilj]               varchar(40)  NULL ,
	[Krus]               varchar(40)  NULL ,
	[ImeFirme]           varchar(20)  NULL ,
	[OpisDelatnosti]     varchar(60)  NULL ,
	[VrstaReklame]       varchar(40)  NULL 
)
go

ALTER TABLE [ADMIN]
	ADD CONSTRAINT [XPKADMIN] PRIMARY KEY  CLUSTERED ([KorisnickoIme] ASC)
go

ALTER TABLE [BLOG]
	ADD CONSTRAINT [XPKBLOG] PRIMARY KEY  CLUSTERED ([BlogID] ASC)
go

ALTER TABLE [CLANARINA]
	ADD CONSTRAINT [XPKCLANARINA] PRIMARY KEY  CLUSTERED ([KorisnickoIme] ASC)
go

ALTER TABLE [KORISNIK]
	ADD CONSTRAINT [XPKKORISNIK] PRIMARY KEY  CLUSTERED ([KorisnickoIme] ASC)
go

ALTER TABLE [PRIJAVLJEN]
	ADD CONSTRAINT [XPKPRIJAVLJEN] PRIMARY KEY  CLUSTERED ([KorisnickoIme] ASC,[TreID] ASC)
go

ALTER TABLE [RASPORED]
	ADD CONSTRAINT [XPKRASPORED] PRIMARY KEY  CLUSTERED ([RasID] ASC,[TreID] ASC)
go

ALTER TABLE [TRENING]
	ADD CONSTRAINT [XPKTRENING] PRIMARY KEY  CLUSTERED ([TreID] ASC)
go

ALTER TABLE [ZAHTEV_BLOG]
	ADD CONSTRAINT [XPKZAHTEV_BLOG] PRIMARY KEY  CLUSTERED ([BlogID] ASC)
go

ALTER TABLE [ZAHTEV_KORISNIK]
	ADD CONSTRAINT [XPKZAHTEV_KORISNIK] PRIMARY KEY  CLUSTERED ([KorisnickoIme] ASC)
go


ALTER TABLE [BLOG]
	ADD CONSTRAINT [R_3] FOREIGN KEY ([KorisnickoIme]) REFERENCES [KORISNIK]([KorisnickoIme])
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
go

ALTER TABLE [BLOG]
	ADD CONSTRAINT [R_15] FOREIGN KEY ([KorisnickoIme]) REFERENCES [ADMIN]([KorisnickoIme])
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
go


ALTER TABLE [CLANARINA]
	ADD CONSTRAINT [R_16] FOREIGN KEY ([KorisnickoIme]) REFERENCES [KORISNIK]([KorisnickoIme])
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
go


ALTER TABLE [PRIJAVLJEN]
	ADD CONSTRAINT [R_8] FOREIGN KEY ([KorisnickoIme]) REFERENCES [KORISNIK]([KorisnickoIme])
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
go

ALTER TABLE [PRIJAVLJEN]
	ADD CONSTRAINT [R_9] FOREIGN KEY ([TreID]) REFERENCES [TRENING]([TreID])
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
go


ALTER TABLE [RASPORED]
	ADD CONSTRAINT [R_2] FOREIGN KEY ([TreID]) REFERENCES [TRENING]([TreID])
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
go


ALTER TABLE [TRENING]
	ADD CONSTRAINT [R_14] FOREIGN KEY ([Trener]) REFERENCES [KORISNIK]([KorisnickoIme])
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
go


ALTER TABLE [ZAHTEV_BLOG]
	ADD CONSTRAINT [R_17] FOREIGN KEY ([KorisnickoIme]) REFERENCES [KORISNIK]([KorisnickoIme])
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
go
