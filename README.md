## Pour utiliser WordPress avec Docker
### Téléchargement

Télécharge ce repository qui a les deux documents:

 * _docker-compose.yml_
 * _README.md_

Pour vérifier le téléchargement, tape:
```
$ cd dockerbuild-wordpress
$ ls
```

Tu dois voir les deux documents listé ci-dessus.

Si nécessaire, tu peux l'éditer.

---
### Docker Compose

Installe ```docker-compose``` dans le directory.

```
$ sudo apt install docker-compose
```

Vérifie que ```docker-compose``` est dans sa version la plus récente.

```
$ sudo -i
```

```
#curl -L "https://github.com/docker/compose/releases/download/1.9.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

#chmod +x /usr/local/bin/docker-compose

#exit
```

---
### Lancement

Crée et lance l'image de WordPress en utilisant ce code:

```
$ docker run --name wordpressdb -e password=password -e wordpress=wordpress -d mysql:latest
```

Finalment, lance le ```docker-compose``` fichier.

```
$ docker-compose up -d
```

Recherche "localport:8080" sur un navigateur pour voir la page de connexion de WordPress.

(Tu peux changer le nombre du port dans le ```docker-compose``` fichier.)

Maintenant, tu peux créer un compte pour WordPress et dessiner ta page web.

---

