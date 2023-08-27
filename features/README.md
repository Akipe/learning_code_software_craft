# Base Behat

## Comment créer un fichier `.feature`

Format de base :

```txt
Scenario: Some description of the scenario
  Given some context
  When some event
  Then outcome
```

```txt
Scenario: Some description of the scenario
  Given some context
  And more context
  When some event
  And second event occurs
  Then outcome
  And another outcome
  But another outcome
```

## Organisation les features

Pour organiser les features en sous dossier, il faut ajouter dans `composer.json` :

```json
"autoload": {
  "classmap": ["features"]
},
```
