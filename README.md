# Initialisation d'un projet Git et Configuration WordPress

## Etape 1 : MAMP

1. Lancer les serveurs sur MAMP.
2. Aller dans les préférences et appliquer les paramètres suivants :
   - **Apache Port** : 8888
   - **MySQL Port** : 8889
3. Ouvrir la page Web : [http://localhost:8888/phpMyAdmin5/](http://localhost:8888/phpMyAdmin5/) et cliquez sur **"Nouveau"**.
4. Donnez comme nom à la base de données : **mabaseamoi**.
5. Retourner sur la page [http://localhost:8888/PROJET-WORDPRESS/wp-admin/setup-config.php](http://localhost:8888/PROJET-WORDPRESS/wp-admin/setup-config.php) et cliquer sur **“Let’s go!”**.
6. Complétez les champs suivants :
   - **Database Name** : mabaseamoi
   - **Username** : root
   - **Password** : root
   - **Database Host** : localhost:8889
   - **Table Prefix** : prefix* (éviter `wp*` car cela génère des erreurs lors de la création).
7. Complétez les champs restants :
   - **Site Title** : travelswap
   - **Username** : test
   - **Password** : i\*\*y%HB3fts492yjYY
   - **E-mail** : test@test.be

## Etape 2 : Git

### Initialisation d'un projet Git

Accédez à votre dossier de projet :

```bash
cd /c/MAMP/htdocs/travelswap
code_Token : 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
```

### Configurer SSH :

```bash
Copy code
git config --global http.sslVerify true
git credential-cache exit
ssh-keygen -t ed25519 -C "232486@student.isfsc.be"
ssh-add ~/.ssh/id_ed25519
eval $(ssh-agent -s)
ssh-add ~/.ssh/id_ed25519
cat ~/.ssh/id_ed25519.pub
```

Ajouter la clé publique dans GitHub : https://github.com.

## Etape 3 : Wordpress

### Page Admin WordPress :

Accéder à la page admin WordPress : http://localhost:8888/PROJET-WORDPRESS/wp-admin/index.php

### Base de donnée :

PhpMyAdmin - Base de données : http://localhost:8888/phpMyAdmin5/index.php
