# BLOC 1 - Développer la présence en ligne de l'organisation

## 1 - Méthodes GET et POST
Tout d'abord, HTTP (Hypertext Transfer Protocol) est le protocole le plus utilisé pour transférer des données sur internet. Les méthodes "GET" et "POST" sont deux principales méthodes de requête mais elles sont différentes dans la manière dont elles sont utilisées.  


### **Premièrement, la méthode http GET est généralement utilisé pour récupérer des données**
> Avec cette méthode, les données sont généralement transmises dans l'URL sous la forme de paramètres de requête comme :  
```
GET /produit?id=536153
``` 
> Les requêtes GET sont donc utilisées pour récupérer des données, elles sont transmises dans l'URL sous forme de "paires clé-valeur", ce qui les rend visibles dans l'URL.  
> *Dans l'exemple ci-dessus,* `id=12345` *est la paire clé-valeur.*  <br><br>

### **Deuxièmement, la méthode http POST est généralement utilisé pour envoyer des données**
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


## 5 - URL

Une URL (Uniform Resource Locator) est une adresse web qui permet de localiser une ressource spécifique sur Internet. Elle est composée de plusieurs parties avec chacune un rôle spécifique. Voici les principales parties d'une URL et leur rôle :<br>

### Schéma
> Le schéma est la première partie de l'URL comme "http://" ou "https://". Il indique le protocole de communication à utiliser pour accéder à la ressource. "http://" signifie une communication non sécurisé via le protocole HTTP, tandis que "https://" indique une communication sécurisée via HTTPS.

### Nom de domaine (Host)
> Le nom de domaine est la partie de l'URL qui identifie le serveur web sur lequel se trouve la ressource. Par exemple, dans "www.exemple.com", "www" est souvent un **sous-domaine**. "exemple" lui, est le nom de domaine principal tandis que ".com", est le domaine de premier niveau (TLD, Top-Level Domain). Le serveur est localisé en utilisant une adresse IP associée à ce nom de domaine.

### Port
> Le port est une partie optionnelle de l'URL qui indique le numéro de port à utiliser pour la communication avec le serveur. Par exemple, ":80" est le port par défaut pour HTTP (non sécurisé), tandis que ":443" est le port par défaut pour HTTPS (sécurisé). Si le port n'est pas spécifié, le navigateur utilise le port par défaut du schéma automatiquement (80 pour HTTP, 443 pour HTTPS).

### Chemin (Path)
> Le chemin identifie l'emplacement spécifique de la ressource sur le serveur. Par exemple, "/sio2024/sioalt.html" indique que la ressource se trouve dans le dossier "sio2024" sur le serveur et s'appelle "sioalt.html". Le chemin est souvent utilisé pour accéder à des pages web spécifiques ou à des fichiers sur un site.

### Requête (Query)
> La partie de requête de l'URL est utilisée pour transmettre des données supplémentaires au serveur. Elle commence généralement par un point d'interrogation "?" suivi de paramètres séparés par des "&". Par exemple, dans "http://www.exemple.com/recherche?motclef=sio2024", "motclef=sio2024" est une requête pour rechercher le terme "sio2024" directement sur le site.

### Fragment (Fragment)
> Le fragment est une partie de l'URL qui identifie une section spécifique d'une page web. Il est suivi par un signe dièse "#" puis d'un identifiant. Par exemple, dans "http://www.exemple.com/page#section2024", le fragment "#section2024" pointe vers la section 2024 de la page.


## 6 - Codes Status

Les codes de statut HTTP sont des codes numériques envoyés par le serveur web en réponse à une requête HTTP pour indiquer l'état de la réponse.<br>Ils sont regroupés en familles en fonction de leur signification générale. Voici les principales familles de codes de statut HTTP avec un exemple pour chacune d'entre elles :

### Famille 1xx - Réponses informatives :
> **100 - Continue**: Le serveur indique que la requête initiale a été reçue et que le client peut continuer à envoyer la requête. `HTTP/1.1 100 Continue`

### Famille 2xx - Réponses de succès :
> **200 - OK**: La requête a été traitée avec succès. `HTTP/1.1 200 OK`<br>
> **204 - No Content**: La requête a été traitée avec succès, mais il n'y a pas de contenu à renvoyer. `HTTP/1.1 204 No Content`

### Famille 3xx - Redirection :
> **301 - Moved Permanently**: La ressource a été déplacée de manière permanente vers une nouvelle URL. `HTTP/1.1 301 Moved Permanently`<br>
> **302 - Found (ou Moved Temporarily)**: La ressource a été temporairement déplacée vers une nouvelle URL. `HTTP/1.1 302 Found`

### Famille 4xx - Erreurs du client :
> **400 - Bad Request**: La requête du client est incorrecte ou mal formée. `HTTP/1.1 400 Bad Request`<br>
> **404 - Not Found**: La ressource demandée n'a pas été trouvée sur le serveur. `HTTP/1.1 404 Not Found`

### Famille 5xx - Erreurs du serveur :
> **500 - Internal Server Error**: Une erreur interne s'est produite sur le serveur. `HTTP/1.1 500 Internal Server Error`<br>
> **503 - Service Unavailable**: Le serveur n'est pas disponible pour le moment. `HTTP/1.1 503 Service Unavailable`


## 7 – Négociation de contenu

La négociation de contenu HTTP est un mécanisme qui permet au client et au serveur web de donner la meilleure représentation d'une ressource en fonction des préférences et des capacités de chacun.<br>Cela signifie que lorsque le client envoie une demande pour une ressource, le serveur peut choisir de lui envoyer différentes versions de cette ressource en fonction des informations fournies par le client et des options disponibles sur le serveur. Voici comment fonctionne ce processus:<br>

Le client envoie une requête HTTP → Le serveur reçoit la requête → Le serveur détermine les options disponibles → Le serveur choisit la meilleure option → Le serveur envoie la réponse au client → Le client affiche la ressource

### Illustration :
Supposons qu'un client envoie une requête au serveur avec les en-têtes suivants:<br>

> Accept-Language: fr, en<br>
> Accept: text/html, application/xhtml+xml, application/xml;q=0.9<br>
<br>Le serveur peut répondre avec une page web disponible dans deux langues (français et anglais) et dans deux formats (HTML et XML). En fonction des en-têtes de la requête, le serveur peut choisir de renvoyer la version HTML en français car c'est la meilleure correspondance avec les préférences du client. Le client affichera ensuite cette page web en français et non en anglais.
