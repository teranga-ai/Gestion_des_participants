# Application sur la Geestion des participants a ala formation  AWS Cote d'Ivoire 

### ****Creation de la table pour la base de donnée****


Cré une table nommé "crud" dans votre serveur MySQL 

```sql
CREATE TABLE `crud` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
)
```

