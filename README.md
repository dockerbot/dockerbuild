## Pour crée une page web dans Docker avec Apache et mySQL
### Téléchargement

Télécharge ce dépôt qui a les trois documents:
```
├── apache-config.conf
├── Dockerfile
├── README.md
└── www
    └── phpinfo.php
```

Pour vérifier le téléchargement, tape:
```
$ ls
```

Tu dois voir les quatre documents listé ci-dessus.

---
### Configuration

Rajoute votre application PHP au sein du dossier nommé "www"

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

Recherche "localhost:NOMBRE\_DU\_PORT" sur un navigateur pour voir la page web.

Pour effacer, arrête la container de l'image:
``` 
$ docker stop CONTAINER_ID
```

Pour connaître le CONTAINER_ID, fais : 
```
$ docker ps
```
---
