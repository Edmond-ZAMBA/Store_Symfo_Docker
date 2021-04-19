<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px src="https://i.imgur.com/6wj0hh6.jpg" alt="Project logo"></a>
 Mis en place de la base de donnée, nous utilison sqlite: </br>
 DATABASE_URL="sqlite:///%kernel.project_dir%/var/eShop.db"</p>
<p>Créer la base donnée => symfony console doctrine:database:create</p>
<p>Création de la page d'accueil Homecontroller </p>
<p>Mettre à jour base.html.twig <br> mettre à jour asset dans dossier public <br> creer le dossier partials pour le header, footer</p>
<p>Création de l'entité User </br> symfony console make:user </br> 
Cette commande dans le terminal configurre automatiquement le security.yaml dans conf/package </br>
ce qui sécurise l'application.
</p>
<p>pour peupler la table user, procédons à l'inscription des utilisateurs par un formulaire: commande : make:registration-form <br>
Le composant symfonycasts/verify-email-bundle --version=1.1.1 est necessaire pour la logique de vérification de l'email de l'utilisateur. <br>
composer require symfonycasts/verify-email-bundle --version=1.1.1
</p>
<p>gmail google mail</p>
<p>composer require symfony/google-mailer</p>
<p>
# Configurer le fichier .env
MAILER_DSN=smtp://user:pass@smtp.example.com:port
gmail+smtp://USERNAME:PASSWORD@default </br>
ressource: https://symfony.com/doc/current/translation.html </br>
Utilisation d'un service en ligne pour la gestion des emails: https://temp-mail.org/fr/
</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>

<h3 align="center">undefined</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

<p align="center"> Few lines describing your project.
    <br> 
</p>

## 📝 Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Deployment](#deployment)
- [Usage](#usage)
- [Built Using](#built_using)
- [TODO](../TODO.md)
- [Contributing](../CONTRIBUTING.md)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)

## 🧐 About <a name = "about"></a>

Write about 1-2 paragraphs describing the purpose of your project.

## 🏁 Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See [deployment](#deployment) for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them.

```
Give examples
```

### Installing

A step by step series of examples that tell you how to get a development env running.

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo.

## 🔧 Running the tests <a name = "tests"></a>

Explain how to run the automated tests for this system.

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## 🎈 Usage <a name="usage"></a>

Add notes about how to use the system.

## 🚀 Deployment <a name = "deployment"></a>

Add additional notes about how to deploy this on a live system.

## ⛏️ Built Using <a name = "built_using"></a>

- [MongoDB](https://www.mongodb.com/) - Database
- [Express](https://expressjs.com/) - Server Framework
- [VueJs](https://vuejs.org/) - Web Framework
- [NodeJs](https://nodejs.org/en/) - Server Environment

## ✍️ Authors <a name = "authors"></a>

- [@kylelobo](https://github.com/kylelobo) - Idea & Initial work

See also the list of [contributors](https://github.com/kylelobo/The-Documentation-Compendium/contributors) who participated in this project.

## 🎉 Acknowledgements <a name = "acknowledgement"></a>

- Hat tip to anyone whose code was used
- Inspiration
- References
