## Pour obtenir Docker sur un ordinateur avec Ubuntu
---
### Installation

Pour installer Docker, tape le code suivant:
```
$ sudo apt-get -y install apt-transport-https ca-certificates curl
$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
$ sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
$ sudo apt-get update
$ sudo apt-get install docker-ce
```

---
### La permission

Tu dois avoir la permission pour accéder à Docker.
```
$ sudo usermod -aG docker $USER
```

Maintenant, tu peux utiliser Docker sans devoir taper "sudo".

---
### Vérification

Pour vérifier que tu as installé Docker avec succès, vois la version de Docker.
```
$ docker -v
```

Si tu veux, tu peux lancer l'image nommé "hello-world" aussi.
```
docker run hello-world
```

Tu dois voir un message de Docker qui t'accueille.
