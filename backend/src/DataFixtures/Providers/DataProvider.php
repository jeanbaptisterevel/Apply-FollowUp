<?php

namespace App\DataFixtures\Providers;

class DataProvider
{

    private $postNameList = [
        "Développeur Web",
        "Directeur général",
        "Directeur des ressources humaines",
        "Directeur financier",
        "Directeur commercial",
        "Directeur marketing",
        "Directeur des opérations",
        "Directeur technique",
        "Gestionnaire de projet",
        "Analyste d'affaires",
        "Développeur informatique",
        "Ingénieur logiciel",
        "Designer UI/UX",
        "Responsable des relations publiques",
        "Journaliste",
        "Responsable de la communication interne",
        "Gestionnaire de la paie",
        "Comptable",
        "Auditeur interne",
        "Analyste de données",
        "Chercheur en intelligence artificielle",
        "Responsable des ventes",
        "Responsable des achats",
        "Responsable de la logistique",
        "Responsable de la qualité",
        "Assistant personnel",
        "Secrétaire administratif",
        "Responsable des relations avec les clients",
        "Responsable de la formation",
        "Responsable de la sécurité informatique",
        "Administrateur système",
        "Administrateur de bases de données"
    ];

    private $sourceApplyList = [
        "Indeed",
        "LinkedIn",
        "Monster",
        "Pôle emploi",
        "Apec",
        "RegionsJob",
        "Qapa",
        "Meteojob",
        "StepStone",
        "Adzuna",
        "Reed",
        "TotalJobs",
        "Jora",
        "Jobrapido",
        "SimplyHired",
        "CareerBuilder",
        "ZipRecruiter",
        "Snagajob",
        "Guru",
        "Upwork",
        "Fiverr",
        "Freelancer",
        "PeoplePerHour",
        "Toptal",
        "FlexJobs",
        "Remote.co",
        "We Work Remotely",
        "SkipTheDrive",
        "Virtual Vocations",
        "Remote OK",
        "Remotely",
        "Remotive",
        "WFH.io"
    ];

    private $companies = [
        "Apple",
        "Microsoft",
        "Amazon",
        "Alphabet (Google)",
        "Facebook",
        "Berkshire Hathaway",
        "Johnson & Johnson",
        "Procter & Gamble",
        "Valeo",
        "Walmart",
        "ExxonMobil",
        "Pfizer",
        "Coca-Cola",
        "Nike",
        "AT&T",
        "Vodafone Group",
        "Verizon Communications",
        "Comcast",
        "Chevron",
        "Ford",
        "General Motors",
        "Toyota",
        "BMW",
        "Daimler",
        "Samsung Electronics",
        "Intel",
        "IBM",
        "Oracle",
        "Honda",
        "Nissan",
        "Phillips 66",
        "Dow Chemical"
    ];

    public function getPost(): string
    {
        return $this->postNameList[array_rand($this->postNameList)];
    }

    public function getSource(): string
    {
        return $this->sourceApplyList[array_rand($this->sourceApplyList)];
    }

    public function getCompany(): string
    {
        return $this->companies[array_rand($this->companies)];
    }
}