## Pour obtenir Docker sur un ordinateur avec Ubuntu
---
### Installation

Pour installer Docker, tape le code suivant:
```
$ sudo apt-get install docker-engine
```

---
### La permission

Tu dois avoir la permission pour accéder à Docker.
```
$ sudo usermod -aG docker $USER
```

Maintenant, tu peux utiliser Docker sans devoir taper "sudo".

---
### Hello World!

Pour vérifier que tu as installé Docker avec succès, lance le image nommé "hello-world".
```
$ docker run hello-world
```

Tu dois voir un message de Docker qui t'accueille.
