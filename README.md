## Pour créer un page web utilisant Apache et mySQL sur Docker

### Téléchargement

Télécharge ce dépot.

Pour vérifier le téléchargement, tape:
```
$ ls
```

Tu dois voir:
 * _Dockerfile_
 * _**phpcode**_

Pour faire ce projet, tu dois créer deux conteneurs. L'un va utiliser l'image d'Apache pour construire le page web avec PHP. L'autre va utiliser l'image de mySQL, et va stocker les données produire par le première conteneur. Les deux va être séparé, mais lié.

---
### mySQL

Commence avec le conteneur de mySQL. Premièrement, tire son image.
```
$ docker pull mysql 
```

Construis et lance le conteneur.
```
$ docker run -p 3900:3306 --name mysql -e MYSQL_ROOT_PASSWORD=password -d mysql:latest
```

---
### Le code PHP

Va dans le dossier **phpcode**.
```
$ cd phpcode
```

Crée ou importe tes fichiers de PHP ici.

---
### Apache

Maintenant, construis le conteneur d'Apache.
```
$ docker build -t httpd:latest .
```

Lie le conteneur d'Apache avec le conteneur de mySQL.
```
$ docker run -d -p NOMBRE\_DU\_PORT:80 --name apache --link mysql:mysql -v $PATH:/var/www/html httpd:latest
```

Le "$PATH" est le location d'un fichier ou dossier. Dans ce cas, tape le path du dossier **phpcode**, l'endroit de tes documents de PHP. 

Pour vérifier le lien, tape:
```
$ docker inspect -f "{{ .HostConfig.Links }}" apache
```

---
### Ta page web

Ta page web crée avec Apache, PHP, mySQL est complet.

Voie ton projet (ou tes projets) en recherchant "localhost:NOMBRE\_DU\_PORT" sur une navigateur.

Tu peux ajouter les fichiers de PHP dans **phpcode** à tout moment. Juste recharge la page web pour les voir.

---
