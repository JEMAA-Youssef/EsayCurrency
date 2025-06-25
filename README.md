# Convertisseur de Devises Symfony

## Description

Application Symfony pour convertir des montants entre différentes devises avec affichage des drapeaux.  
Utilise l’API ExchangeRate.host et Choices.js pour une meilleure expérience utilisateur.

## Fonctionnalités

- Conversion entre plus de 100 devises.
- Recherche et sélection avec affichage des drapeaux.
- Permutation rapide des devises.
- Conversion sans rechargement (AJAX).
- Messages d’erreur clairs.

## Prérequis

- PHP 8.1+
- Composer
- Symfony CLI (optionnel)
- Serveur HTTP (Apache, Nginx ou intégré Symfony)
- Connexion Internet

## Installation

```bash
git clone https://github.com/ton-utilisateur/convertisseur-devises.git
cd convertisseur-devises
composer install
```
## Configuration

Configurer la clé API dans `.env.local` :

```ini
EXCHANGE_API_KEY=ta_cle_api_ici
```
Lancer le serveur Symfony : symfony server:start

Visiter  https://127.0.0.1:8000


## Contact
Pour toute question : jemaayoussef4@gmail.com

