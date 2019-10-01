<?php
include_once('Modeles/Metiers/genre.php');

Class conteneurGenre
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesGenres;

	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
		{
		$this->lesGenres = new arrayObject();
		//$this->maBD = new gestionVideo();

		}

	//METHODE AJOUTANT UN genre------------------------------------------------------------------------------
	public function ajouteUnGenre($unId‪Genre, $unLibelleGenre, $UnNomImage)
		{
		$unGenre = new genre($unId‪Genre, $unLibelleGenre, $UnNomImage);
		$this->lesGenres->append($unGenre);

		}

	//METHODE RETOURNANT LE NOMBRE de genres-------------------------------------------------------------------------------
	public function nbGenres()
		{
		return $this->lesGenres->count();
		}

	//METHODE RETOURNANT LA LISTE DES Genres-----------------------------------------------------------------------------------------
	public function listeDesGenres()
		{
		$liste = "<div class='container h-100'>
                    <div class='row h-100 justify-content-center align-items-center'>";

		foreach ($this->lesGenres as $unGenre)
			{
				$liste = $liste."<form href = 'index.php?vue=Videotheque&action=choixGenre' method='post'><a href=''><p class=test >".$unGenre->getLibelleGenre()."</p><img src='http://localhost/ApplicationDeBase/Images/".$unGenre->getNomImage()."'></a></form>"; //'.ImageGenre($unGenre->getIdGenre()).'
			}
			$liste=$liste."</div></div>";
		return $liste;
		}

		//METHODE RETOURNANT LA LISTE DES genres DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesGenresAuFormatHTML()
		{
		$liste = "<SELECT name = 'idGenre'>";
		foreach ($this->lesGenres as $unGenre)
			{
			$liste = $liste."<OPTION value='".$unGenre->getIdGenre()."'>".$unGenre->getLibelleGenre()."</OPTION>";
			}
		$liste = $liste."</SELECT>";
		return $liste;
		}

//METHODE RETOURNANT UN genre A PARTIR DE SON NUMERO--------------------------------------------
	public function donneObjetGenreDepuisNumero($unIdGenre)
		{
		//initialisation d'un booléen (on part de l'hypothèse que le genre n'existe pas)
		$trouve=false;
		$leBonGenre=null;
		//création d'un itérateur sur la collection lesGenres
		$iGenre = $this->lesGenres->getIterator();
		//TQ on a pas trouvé le genre et que l'on est pas arrivé au bout de la collection
		while ((!$trouve)&&($iGenre->valid()))
			{
			//SI le numéro du genre courant correspond au numéro passé en paramètre
			if ($iGenre->current()->getIdGenre() == $unIdGenre)
				{
				//maj du booléen
				$trouve=true;
				//sauvegarde du genre courant
				$leBonGenre = $iGenre->current();

				}
			//SINON on passe au genre suivant
			else
				$iGenre->next();
			}
		return $leBonGenre;
		}

	}

?>
