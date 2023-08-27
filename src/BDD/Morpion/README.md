# Morpion

Projet pour apprendre le développement piloté par le comportement (BDD).

## Spécifications fonctionnelles

On représentera l'interface comme ceci :

| 1 | 2 | 3 |
|---|---|---
| 4 | 5 | 6 |
| 7 | 8 | 9 |

**Fonctionnalité** : Gestion de la place des joueurs au tableau

Afin de gérer le role de chaque case

Un seul joueur doit pouvoir occupé une case.

*Voici la notation Gerkin représentant cette fonctionnalité :*

*En anglais* :

**Given** player 1 is on square 3

**When** player 2 attempts to take square 3

**Then** player 2 should receive an error

**And** they should not be able to take square 3

*En français :*

**Étant donnée que** le joueur 1 est sur la case 3

**Lorsque** le joueur 2 tente de prendre la case 3

**Alors** le joueur 2 doit recevoir une erreur

**Et** il ne devrait pas pouvoir prendre la case 3
