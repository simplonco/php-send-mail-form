# PHP Formulaire d'envoi de Mail

![MailMan](spam.jpg)

Un simple formulaire **HTML** :

* Un champ `input` email
* une zone de texte `textarea` message
* Un bouton `submit` envoyer

Lorsque vous cliquez sur le bouton `submit` envoyer, votre page envoie évidemment le message par courrier au destinataire défini dans le champ `input` email !

Pour ce faire, vous devez utiliser un Backend **PHP**, consultez la documentation officielle, il y a une `fonction` pour cela.

### Setup

```shell
sudo apt-get install sendmail
```

## Bonus

* Utilisez _Bootstrap_ OU _Fundation_ OU _Material Design Light_
* Vérifiez si l'adresse e-mail est valide (utilisation des **REGEX**)
* Limiter la taille du message à 500 caractères
* Laisser l'utilisateur ajouter plusieurs destinataires dans le champs `email`
* Autoriser les emoji, le texte en gras, les images, pièces jointes et même les vidéos youtube
* Ou n'importe quoi d'autre que vous croyez être une fonctionnalité sympa !

### Pour aller plus loin

* [How To Use Gmail or Yahoo with PHP mail() Function](https://www.digitalocean.com/community/tutorials/how-to-use-gmail-or-yahoo-with-php-mail-function)
