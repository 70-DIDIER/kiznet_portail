Créer une solution WiFi avec :

    Connexion automatique à un portail captif.

    Sélection d’un forfait Internet (1h, jour, mois...).

    Paiement via Mobile Money (Orange, MTN, Moov).

    Accès Internet activé automatiquement et sans mot de passe.

🧩 Composants techniques

Voici les éléments que tu devras développer/intégrer :
1. Portail Captif Web

Tu dois créer une interface web :

    Affichée dès qu’un utilisateur se connecte au WiFi.

    Qui permet de choisir un forfait.

    Qui intègre le paiement Mobile Money.

    Qui gère automatiquement l’autorisation d’accès une fois le paiement effectué.

    Avec un tableau de bord d’administration local pour visualiser les connexions, paiements, etc.

2. Routeur Mikrotik

    Configuré en mode Hotspot, il interagit avec ton application via l’API Mikrotik.

    Il identifie les utilisateurs via l’adresse MAC.

    Après confirmation du paiement, ton app doit communiquer avec lui pour ouvrir l’accès à Internet.

3. Base de données

Tu dois prévoir une BDD pour :

    Suivre les utilisateurs connectés.

    Historiser les paiements.

    Gérer les forfaits configurables.

    Générer des statistiques de connexion.

🔄 Fonctionnement global

    L’utilisateur se connecte au WiFi (ex : “Connexion_Kiznet”).

    Il est redirigé vers ton portail captif.

    Il choisit un forfait (ex : 1h = 200 FCFA).

    Il paie via Mobile Money.

    Ton système reçoit le paiement, contacte le Mikrotik via API.

    Mikrotik ouvre l’accès (adresse MAC autorisée pendant x temps).

    L’utilisateur accède à Internet.

🛠️ Technos à utiliser
Élément	Technologie
Interface	HTML, CSS, JavaScript
Backend	PHP ou Laravel
BDD	MySQL / MariaDB
Paiement	API Mobile Money
Matériel réseau	Routeur Mikrotik + API
Hébergement	Serveur local ou mini PC
Sécurité	HTTPS, logs, vérification paiement
📦 Livrables attendus

    ✅ Portail captif responsive

    ✅ Interface forfaits + paiement

    ✅ Activation auto après paiement

    ✅ Tableau de bord administrateur

    ✅ Documentation technique claire

