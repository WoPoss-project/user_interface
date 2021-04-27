map_data = {
  "normalForm": true,
  "headword": "POTIS, -e",
  "etymology": [
    {
      "period": "PIE",
      "form": "*pót-i-",
      "def": "",
      "certitude": false
    },
    {
      "period": "PIt",
      "form": "poti-, pot-ē-",
      "def": "'master, in control of', 'to be master'",
      "certitude": true
    }
  ],
  "dataFormat": "cent",
  "meanings": [
    {
      "definition": "To be able",
      "construct": "POTIS esse",
      "group": "_",
      "analysis": [
        {
          "id": "itggx",
          "category": "Modal: dynamic",
          "emergence": -3,
          "disparition": "None",
          "attestation": "PLAUT. Amph. 626 qui … intellegere quisquam potis est? Ita nugas blatis.",
          "certainty": true,
          "relationships": {
            "origins": [],
            "destinations": [],
            "unspecified": [
              {
                "rel": "xhazynjp",
                "cert": true
              }
            ]
          }
        }
      ]
    },
    {
      "definition": "It is possible",
      "construct": "POTIS esse",
      "group": "_",
      "analysis": [
        {
          "id": "p",
          "category": "Modal: dynamic",
          "emergence": -2,
          "disparition": "None",
          "attestation": "PLAUT. Bacch. 35 quid si hoc potis est ut tu taceas, ego loquar?",
          "certainty": true,
          "relationships": {
            "origins": [],
            "destinations": [],
            "unspecified": [
              {
                "rel": "nejmmzn",
                "cert": true
              }
              ]
          }
        }
      ]
    },
    {
      "definition": "Is it possible..?",
      "construct": "POTIN",
      "group": "_",
      "analysis": [
        {
          "id": "xhazynjp",
          "category": "Modal: dynamic",
          "emergence": -3,
          "disparition": "None",
          "attestation": "[pragmatic use for deontic authority] PLAUT. Amph. 903 potin [est] ut apstineas manum?",
          "certainty": true,
          "relationships": {
            "origins": [],
            "destinations": [
              {
                "rel": "nejmmzn",
                "cert": true
              }
            ],
            "unspecified": [
              {
                "rel": "itggx",
                "cert": true
              }
            ]
          }
        }
      ]
    },
    {
      "definition": "[impersonal] Is it possible..?",
      "construct": "POTIN",
      "group": "_",
      "analysis": [
        {
          "id": "nejmmzn",
          "category": "Modal: dynamic",
          "emergence": -2,
          "disparition": "None",
          "attestation": "PLAUT. Trin. 759 potin est ab amico alicunde exorari argentum? :: potest.",
          "certainty": true,
          "relationships": {
            "origins": [
              {
                "rel": "xhazynjp",
                "cert": true
              }
              ],
            "destinations": [],
            "unspecified": [
              {
                "rel": "p",
                "cert": true
              }
              ]
          }
        }
      ]
    }
  ]
}