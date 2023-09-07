# BLOC 1 - Développer la présence en ligne de l'organisation

## Méthodes GET et POST
Tout d'abord, HTTP (Hypertext Transfer Protocol) est le protocole le plus utilisé pour transférer des données sur internet. Les méthodes "GET" et "POST" sont deux principales méthodes de requête mais elles sont différentes dans la manière dont elles sont utilisées.  


> ### **Premièrement, la méthode http GET est généralement utilisé pour récupérer des données** :
> Avec cette méthode, les données sont généralement transmises dans l'URL sous la forme de paramètres de requête comme `GET /produit?id=536153`.  
> Les requêtes GET sont donc utilisées pour récupérer des données, elles sont transmises dans l'URL sous forme de "paires clé-valeur", ce qui les rend visibles dans l'URL.  
> *Dans l'exemple ci-dessus,* `id=12345` *est la paire clé-valeur.*  


> ### **Deuxièmement, la méthode http POST est généralement utilisé pour envoyer des données** :
> Avec cette méthode, les données ne sont pas généralement transmises dans l'URL, mais plutôt dans le corps de la requête comme `POST /produit`.  
> A contrario de la méthode http GET, les données avec la méthode POST sont transmises dans le corps de la requête donc invisible dans l'URL. Par exemple, un objet JSON ou un formulaire HTML avec des champs de saisie peut être envoyé :
