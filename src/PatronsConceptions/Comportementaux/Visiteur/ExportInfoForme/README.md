Exemple : gestion d'export d'informations de formes géometrique
===

On souhaite pouvoir exporter dans plusieurs format (XML et JSON) des informations concernant des formes géometriques (point, cercle, carré).

On ne veut pas "polluer" les classes des formes géometrique avec le système de gestion d'export.

On utilise donc le patron de conception *Visiteur*.
