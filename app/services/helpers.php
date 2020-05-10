<?php 


	namespace App\services;
	use App\Profil;
	use App\SavoirFaire;
	use App\Competence;
	/**
	 * 
	 */
	class Helpers 
	{
		public function listeProfil()
		{
			$profils = Profil::first();
			return $profils;

		}
		public function listeSavoirFaire()
		{
			$savoirFaire = SavoirFaire::all();
			return $savoirFaire;

		}
		public function listeCompetencesTech()
		{
			$cmpTech = Competence::all();
			return $cmpTech;

		}


		
		
	}

 ?>