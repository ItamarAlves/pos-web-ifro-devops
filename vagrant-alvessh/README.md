# DEPLOY COM VAGRANT

## Executar
```sh
$ vagrant up 
```
## Acessar a aplicação pela url: http://192.168.56.3/index.html

```sh

# postgresql, para efetuar o teste
$ vagrant ssh postgresql
$ sudo su - postgres
$ createuser posweb
$ createdb posweb -O posweb
$ psql -c "alter user posweb with password 'posweb'"
$ psql posweb

```