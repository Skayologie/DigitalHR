# HRMS - Human Resource Management System

## Description
HRMS (Human Resource Management System) est une application développée sous Laravel 11 permettant aux entreprises de gérer efficacement leurs employés, départements et hiérarchies. Le système intègre la gestion des congés, des formations, et des profils utilisateurs avec différents niveaux d'accès selon les rôles (Admin, RH, Manager, Employé).

## Fonctionnalités principales

- **Gestion des utilisateurs** avec différents rôles et permissions
- **Gestion des départements** de l'entreprise
- **Système de congés** avec workflow d'approbation (employé → manager → RH)
- **Gestion des formations et cursus** pour les employés
- **Tableaux de bord** adaptés à chaque type d'utilisateur
- **Gestion des profils** avec informations personnelles et professionnelles

## Pré-requis

- PHP 8.1 ou supérieur
- Composer
- MySQL ou autre base de données compatible
- Node.js et NPM (pour les assets)

## Installation

1. Cloner le dépôt
```bash
git clone https://github.com/votre-username/hrms.git
cd hrms
```

2. Installer les dépendances
```bash
composer install
npm install
npm run build
```

3. Configurer l'environnement
```bash
cp .env.example .env
php artisan key:generate
```

4. Configurer la base de données dans le fichier `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hrms
DB_USERNAME=root
DB_PASSWORD=
```

5. Exécuter les migrations et les seeders
```bash
php artisan migrate

php artisan db:seed --class=CongeSeeder
php artisan db:seed --class=CursusSeeder
php artisan db:seed --class=DatabaseSeeder
php artisan db:seed --class=DepartmentSeeder
php artisan db:seed --class=FormationSeeder
php artisan db:seed --class=RoleSeeder
```

6. Lancer le serveur
```bash
php artisan serve
```

## Structure des rôles

- **Admin**: Accès complet au système
- **RH**: Gestion des employés, validation des congés
- **Manager**: Gestion de son département, approbation initiale des congés
- **Employé**: Demandes de congés, accès à son profil

## Routes principales

### Routes publiques
| Méthode | URI | Description |
|---------|-----|-------------|
| GET | /dashboard | Tableau de bord principal |

### Routes d'authentification
| Méthode | URI | Description |
|---------|-----|-------------|
| GET | /profile | Modifier son profil |
| PATCH | /profile | Mettre à jour son profil |
| DELETE | /profile | Supprimer son profil |
| POST | /logout | Se déconnecter |

### Routes pour tous les utilisateurs authentifiés
| Méthode | URI | Description |
|---------|-----|-------------|
| POST | /Conge/SendRequest | Envoyer une demande de congé |
| GET | /Conge/requests | Voir ses demandes de congé |
| GET | /Conge/showDetails/{user} | Voir les détails d'une demande |
| GET | /Conge/AllRequests | Afficher toutes les demandes |

### Routes Admin
| Méthode | URI | Description |
|---------|-----|-------------|
| POST | /Admin/User/Create | Créer un utilisateur |
| GET/POST | /Admin/User/{user}/edit | Modifier un utilisateur |
| GET | /Admin/Department | Liste des départements |
| POST | /Admin/Department | Créer un département |
| GET/POST | /Admin/Department/{department}/edit | Modifier un département |
| DELETE | /Admin/Department/{department} | Supprimer un département |
| GET | /roles | Liste des rôles |
| PATCH | /roles | Modifier un rôle |
| POST | /roles/Add | Ajouter un rôle |
| DELETE | /roles/{role} | Supprimer un rôle |

### Routes Manager
| Méthode | URI | Description |
|---------|-----|-------------|
| GET | /ShowEmployee | Afficher les employés du département |
| GET | /Manager/Manage/leave | Gérer les demandes de congé |

### Routes RH
| Méthode | URI | Description |
|---------|-----|-------------|
| GET | /Manage/leaves | Voir les congés approuvés par les managers |
| GET | /Rh/Conge/accept/{id} | Accepter une demande de congé |
| GET | /Rh/Conge/refuse/{id} | Refuser une demande de congé |

## Seeders disponibles

Le système contient les seeders suivants pour initialiser la base de données avec des données de test:

- `RoleSeeder` - Création des rôles de base (Admin, RH, Manager, Employé)
- `DepartmentSeeder` - Création des départements de l'entreprise
- `FormationSeeder` - Création des formations disponibles
- `CursusSeeder` - Création des cursus de formation
- `CongeSeeder` - Création de demandes de congé d'exemple

Pour exécuter tous les seeders dans le bon ordre:
```bash
php artisan db:seed
```

Pour exécuter un seeder spécifique:
```bash
php artisan db:seed --class=NomDuSeeder
```

## Contribuer

1. Fork le projet
2. Créer une branche (`git checkout -b feature/amazing-feature`)
3. Commit vos changements (`git commit -m 'Add some amazing feature'`)
4. Push sur la branche (`git push origin feature/amazing-feature`)
5. Ouvrir une Pull Request

