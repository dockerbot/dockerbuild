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
 * _README.md_

Pour faire ce projet, tu dois créer deux conteneurs. L'un va utiliser l'image d'Apache pour faire le code de PHP. L'autre va utiliser l'image de mySQL, et va stocker les données produire par le première conteneur. Les deux va être séparé, mais lié.

---
### mySQL

Construis et lance le conteneur de mySQL.
```
$ docker run -p 3900:3306 --name mysql -e MYSQL_ROOT_PASSWORD=password -d mysql:latest
```

Si tu veux ajouter ou éditer les tables dans mySQL, va à l'intérieur du conteneur.
```
$ docker exec -it mysql bash
```

(Tu peux utiliser ce method pour entre les autres conteneurs.)

Quand tu va dans le conteneur, entre l'interface de mySQL.
```
# mysql -u root -p
```

Et tape "password" comme mot de pass.

Pour exiter, tape ```ctrl + d``` deux fois.

---
### Le code PHP

Va dans le dossier **phpcode**.
```
$ cd phpcode
```

Crée ou importe tes fichiers de PHP ici.

Il y a deja un document de PHP dans le dossier, nommé "test.php". Plus tard, tu vas editer et lancer ce fichier pour vérifier si tes conteneurs sont lié.

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
### Lancement et les tests

Maintenant, il faut que tu modifies le fichier "test.php". Ce document utilise "PDO" pour obtenir et procéder le characteristiques du conteneur de mySQL (comme le nom d'utilisateur, le nom de pass, et l'adresse du host). Tu dois définir l'adresse du host égale à l'adresse IP du conteneur.

Pour trouver l'adresse IP, tape:
```
$ docker inspect mysql | grep IPAddress
``` 

Après tu as inséré cet adresse dans "test.php", recherchant "localhost:NOMBRE\_DU\_PORT" sur une navigateur. Tu peux voir et charger tous tes projets de PHP ici. Clique sur "text.php" pour tester le lien entre le conteneur d'Apache et le conteneur de mySQL. Si il est fonctionnelle, tu verras ce message: "Le connection est fonctionnelle!".

Tu peux ajouter ou éditer les fichiers de PHP dans **phpcode** à tout moment. Juste recharge la page web pour les voir.

---
