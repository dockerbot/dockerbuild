## Pour crée une page web dans Docker avec Apache et mySQL
### Téléchargement

Télécharge ce repository qui a les trois documents:

 * _apache-config.conf_	
 * _Dockerfile_
 * _README.md_

Pour vérifier le téléchargement, tape:
```
$ cd dockerbuild-apache-mysql
$ ls
```

Tu dois voir le trois documents listé ci-dessus.

---
### Installation	

Crée le directory nommé "www".
```
$ mkdir www
$ cd www
```

Avec 'nano', crée un document nommé "index.php".
```
$ nano index.php
```

Tu vas copier et coller tous ton php code dans ce document.

Encore, vérifie le contents de "apachebuild".
Tu dois voir:

 * _apache-config.conf_
 * _Dockerfile_
 * _README.md_
 * _**www**_

---
### Lancement

Construis la page.
```
$ docker build -t IMAGE_NOM .
```

Exécute la page et l'assigne à un port.
```
$ docker run -d -p NOMBRE_DU_PORT:80 IMAGE_NOM
```

Recherche "localport:NOMBRE\_DU\_PORT" sur un navigateur pour voir la page web.

Pour effacer, arrête la container de l'image:
``` 
$ docker stop CONTAINER_ID
```
---
