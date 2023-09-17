# BLOC 1 - Développer la présence en ligne de l'organisation

## 1 - Méthodes GET et POST
Tout d'abord, HTTP (Hypertext Transfer Protocol) est le protocole le plus utilisé pour transférer des données sur internet. Les méthodes "GET" et "POST" sont deux principales méthodes de requête mais elles sont différentes dans la manière dont elles sont utilisées.  


> ### **Premièrement, la méthode http GET est généralement utilisé pour récupérer des données**
> Avec cette méthode, les données sont généralement transmises dans l'URL sous la forme de paramètres de requête comme :  
```
GET /produit?id=536153
``` 
> Les requêtes GET sont donc utilisées pour récupérer des données, elles sont transmises dans l'URL sous forme de "paires clé-valeur", ce qui les rend visibles dans l'URL.  
> *Dans l'exemple ci-dessus,* `id=12345` *est la paire clé-valeur.*  
>  
>   
> ### **Deuxièmement, la méthode http POST est généralement utilisé pour envoyer des données**
> Avec cette méthode, les données ne sont pas généralement transmises dans l'URL, mais plutôt dans le corps de la requête comme `POST /produit`.  
> A contrario de la méthode http GET, les données avec la méthode POST sont transmises dans le corps de la requête donc invisible dans l'URL. Par exemple, un objet JSON ou un formulaire HTML avec des champs de saisie peut être envoyé :  
```
{
  "produit_id": 12345,
  "quantite": 2
}
```  
> Cette méthode de requête est donc utilisé pour transférer des données au serveur qui peut modifier les données comme la création d'une nouvelle ressource ou d'une mise à jour.  
  
Pour synthétiser, la méthode http GET est généralement utilisé pour récupérer des données contrairement a la méthode POST, qui est utilisé pour soumettre des données au serveur qui peut entraîner des modifications de l'état du serveur.  


## 2 - Comparaison méthodes

| Méthodes | Transmission de données | Objectif principal | Visibilité des données dans l'URL | Implication sur les données |
|:-:    |:-:    |:-:    |:-:    |:-:    |
| GET | Les données sont transmises dans l'URL en tant que paramètres de requête | Récupération de données | Les données sont visibles dans l'URL | Sans effet, ne modifie pas l'état du serveur |
| POST | Les données sont transmises dans le corps de la requête, généralement de manière invisible dans l'URL | Soumission de données au serveur, généralement pour effectuer des opérations qui modifient l'état du serveur | Les données ne sont généralement pas visibles dans l'URL | Peut modifier l'état du serveur ou des données |


## 3 - Extensible

Le protocole HTTP (Hypertext Transfer Protocol) est extensible et lui permet d'évoluer avec le temps pour prendre en charge de nouvelles fonctionnalités sans avoir une refonte complète du protocole. Voici les principaux aspects qui rendent HTTP extensible :

> **Méthodes HTTP extensibles**: HTTP définit un ensemble de méthodes standard telles que GET, POST, PUT, DELETE, etc... qui décrivent l'action à effectuer sur une ressource.<br><br> 
> **En-têtes HTTP extensibles**: Les en-têtes HTTP permettent de transporter des informations supplémentaires dans une requête ou une réponse. Le protocole HTTP permet d'ajouter des en-têtes personnalisés pour transporter des métadonnées spécifiques à une application.<br><br>
> **Version HTTP**: Les versions du protocole HTTP (HTTP/1.0, HTTP/1.1, HTTP/2, HTTP/3, etc.) permettent d'introduire de nouvelles fonctionnalités en maintenant la compatibilité avec les versions précédentes et permet d'introduire de nouvelles fonctionnalités.<br><br>
> **Extensions HTTP**: L'extension HTTP se fait souvent via des protocoles complémentaires, tels que WebSockets pour la communication en temps réel ou HTTP/2 pour l'amélioration des performances.  

Pour résumer, le protocole HTTP est extensible puisqu'il peut évoluer avec de nouvelles méthodes (en-têtes, versions, extensions et d'autres encore...) et en maintenant la compatibilité avec les fonctionnalités déjà existantes.

## 4 - Sans état

**Un protocole sans état** signifie que toutes les interactions entre un navigateur web et un serveur web est une nouvelle conversation sans que le serveur ne se souvienne des requêtes précédentes.<br>A titre d'exemple, c'est comme si vous entriez dans un magasin et que le vendeur ne se souvenait pas de ce que vous avez acheté la dernière fois.<br>Cependant, le serveur a besoin de moyens supplémentaires comme les cookies pour se souvenir de vous d'une visite à l'autre. Ainsi, cela peut rendre l'intéraction avec l'utilisateur plus rapide et plus efficace.
