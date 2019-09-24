<?php
Class genre
	{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $id‪Genre;
	private $libelleGenre;
	private $nomImage;


	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct($unId‪Genre, $unLibelleGenre, $UnNomImage)
		{
		$this->id‪Genre = $unId‪Genre;
		$this->libelleGenre = $unLibelleGenre;
		$this->nomImage = $UnNomImage;
		}

	//ACCESSEURS-------------------------------------------------------------------------------
	public function getIdGenre()
		{
		return $this->id‪Genre;
		}

	public function getLibelleGenre()
		{
		return $this->libelleGenre;
		}

	public function getNomImage()
		{
		return $this->nomImage;
		}

	//SETTEUR------------------------------------------------------------

	public function setIdGenre($unId‪Genre)
		{
		$this->id‪Genre = $unId‪Genre;
		}
	public function setLibelleGenre($unLibelleGenre)
		{
		$this->libelleGenre = $unLibelleGenre;
		}
	public function setNomImage($UnNomImage)
		{
		$this->nomImage = $UnNomImage;
		}

	}

?>
