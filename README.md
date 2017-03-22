## Pour crée un application de Rails avec Docker

### Téléchargement

Télécharge ce repository sur Github.

Pour vérifier le téléchargement, tape:
```
$ cd dockerbuild-ruby-rails
$ ls
```

Tu vas voir:
 * _**mypath**_
 * _README.md_

Aussi, va à l'intérieur du dossier **myapp**.
```
$ cd myapp
```

Ce dossier est l'endroit où tu vas crée ton application. Si tu crées un autre application à l'avenir, tu devras le faire dans un dossier séparé dans **dockerbuild-ruby-rails**.

Ici, il doit y avoir trois fichiers:
 * _Dockerfile_
 * _Gemfile_
 * _docker-compose.yml_

Aussi, crée un ```Gemfile.lock``` vide.
```
$ touch Gemfile.lock
```

Ces quatre documents contribueront chacun à rendre Rails fonctionnel.

---
### Construction

D'abord, lance le ```docker-compose``` fichier.
```
$ docker-compose run app rails new . --force --database=mysql --skip-bundle
```

Beaucoup de fichiers seront créés, mais tu ne peux pas les accéder.

(Si tu ouvres le Gemfile, tu peux voir que le lancement de ```docker-compose``` a le changé aussi.)

Pour obtenir l'autorisation de modifier ces fichiers, tape:
```
$ sudo chown -R $USER:$USER .
```

Maintenant, tu peux edité le fichier nommé ```database.yml```.

À l'intérieur de ce document, remplace tous le texte avec le code suivant:
```
default: &default
  adapter: mysql2
  encoding: utf8
  pool: 5
  database: <%= ENV['DB_NAME'] %>
  username: <%= ENV['DB_USER'] %>
  password: <%= ENV['DB_PASSWORD'] %>
  host: <%= ENV['DB_HOST'] %>

development:
  <<: *default

test:
  <<: *default
production:
  <<: *default
```

Finalment, construis le conteneur de Rails dans le terminal, encore avec ```docker-compose```.
```
$ docker-compose build
```

---
### Lancement

Lance le ```docker-compose``` fichier.
```
$ docker-compose up
```

Recherche "localhost:3001" sur un navigateur pour voir la page web de Rails.

(Tu peux changer le port dans ```docker-compose.yml```.)

Maintenant, tu peux crée un application avec Rails.

Bien que tu utiliseras les commands de Rails, tu devras commencer ses commands avec ```docker-compose run --rm app```. Par example, si tu voulais faire un command du migration (```$ rake db:migrate```), tu devras taper:
```
$ docker-compose run --rm app rake db:migrate
```

Aussi, tu peux voir le statut des services de ton application:
```
$ docker-compose ps
```

---
### Un test (optionnel)

À des fins de test, tu peux essayer de créer une application simple sur Rails. Cet application construira des cartes de note simples avec des titres et du texte.

Dans un autre fenêtre du terminal, établis le "scaffold" qui va définir l'application.
```
$ docker-compose run --rm app rails g scaffold note title body:text
```

Migrate la base de données.
```
$ docker-compose run --rm app rake db:migrate
```

Cette commande va faire une table apparaissent. Dans cette table, tu peux voir le nom de l'application, "notes".

Quand tu recherches "localhost:3001/notes", tu vas voir ton nouvelle application.

---
