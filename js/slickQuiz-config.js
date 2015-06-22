// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var quizJSON = {
    "info": {
        "name":    "Test Your Knowledge!!",
        "main":    "",
        "results": "",
        "level1":  "You aced it! You'v clearly done your homework",
        "level2":  "Nice job! Looks like you're ready for the real deal",
        "level3":  "Not too shabby. Some more revision required",
        "level4":  "Eeek. You could do with a bit more practice",
        "level5":  "Ouch. Did you even try?!" // no comma here
    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What colour are the reflective studs between a motorway and its slip road?",
            "a": [
                {"option": "Amber",      "correct": false},
                {"option": "White",     "correct": false},
                {"option": "Green",      "correct": true},
                {"option": "Red",     "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span> The studs between the carriageway and the hard shoulder are normally red. These change to <strong>green</strong> where there is a slip road. They will help you identify slip roads when visibility is poor or when it’s dark.</p>",
            "incorrect": "<p><span>Incorrect</span>The studs between the carriageway and the hard shoulder are normally red. These change to <strong>green</strong> where there is a slip road. They will help you identify slip roads when visibility is poor or when it’s dark.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "Which sign means that there may be people walking along the road?",
            "a": [
                {"option": "<img src='images/TS4646.jpg'>",                   "correct": false},
                {"option": "<img src='images/TS4647.jpg'>",                   "correct": true},
                {"option": "<img src='images/TS4672.jpg'>",                   "correct": false},
                {"option": "<img src='images/TS4703.jpg'>",                   "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>Always check the road signs. Triangular signs are warning signs and they’ll keep you informed of hazards ahead and help you to anticipate any problems. There are a number of different signs showing pedestrians. Learn the meaning of each one.</p>",
            "incorrect": "<img src='images/TS4647.jpg'><p><span>Incorrect</span>Always check the road signs. Triangular signs are warning signs and they’ll keep you informed of hazards ahead and help you to anticipate any problems. There are a number of different signs showing pedestrians. Learn the meaning of each one.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "Which type of emergency vehicle is fitted with a green flashing beacon?",
            "a": [
                {"option": "Fire engine",       "correct": false},
                {"option": "Road gritter",      "correct": false},
                {"option": "Ambulance",         "correct": false},
                {"option": "Doctor’s car",      "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>A green flashing beacon on a vehicle means the driver or passenger is a doctor on an emergency call. Give way to them if it’s safe to do so. Be aware that the vehicle may be travelling quickly or may stop in a hurry.</p>",
            "incorrect": "<p><span>Incorrect</span>A green flashing beacon on a vehicle means the driver or passenger is a <strong>doctor on an emergency call</strong>. Give way to them if it’s safe to do so. Be aware that the vehicle may be travelling quickly or may stop in a hurry.</p>" // no comma here
        },
        { // Question 4
            "q": "In good conditions, what is the typical stopping distance at 70mph?",
            "a": [
                {"option": "53 metres (175 feet)",     "correct": false},
                {"option": "60 metres (197 feet)",     "correct": false},
                {"option": "3 metres (240 feet)",      "correct": false},
                {"option": "96 metres (315 feet)",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>96 metres (315 feet) is the typical stopping distance. It will take at least this distance to think, brake and stop in good conditions. In poor conditions it could take much longer.</p>",
            "incorrect": "<p><span>Incorrect</span><strong>96 metres (315 feet)</strong> is the typical stopping distance. It will take at least this distance to think, brake and stop in good conditions. In poor conditions it could take much longer." // no comma here
        },
        { // Question 5
            "q": "Where would you expect to see these markers? Mark two answers.<img src='images/TS4027.jpg'>",
            "a": [
                {"option": "On a motorway sign",                        "correct": false},
                {"option": "At the entrance to a narrow bridge",        "correct": false},
                {"option": "On a large goods vehicle",                  "correct": true},
                {"option": "On a builder’s skip placed in the road",    "correct": true} // no comma here
            ],
            "select_any": true,
            "force_checkbox": true,
            "correct": "<p><span>Correct</span>These markers must be fitted to vehicles over 13 metres long, large goods vehicles, and rubbish skips placed in the road. They are reflective to make them easier to see in the dark.</p>",
            "incorrect": "<p><span>Incorrect</span>These markers must be fitted to <strong>vehicles over 13 metres long</strong>, <strong>large goods vehicles</strong>, and <strong>rubbish skips placed in the road</strong>. They are reflective to make them easier to see in the dark.</p>" // no comma here
        },
        { // Question 6
            "q": "What does this signal from a police officer mean to oncoming traffic?<img src='images/TS4074.jpg'>",
            "a": [
                {"option": "Go ahead",                          "correct": false},
                {"option": "Stop",                              "correct": true},
                {"option": "Turn left",                         "correct": false},
                {"option": "Turn right",                        "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>Police officers may need to direct traffic, for example, at a junction where the traffic lights have broken down. Check your copy of the Highway Code for the signals that they use.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>Stop</strong>. Police officers may need to direct traffic, for example, at a junction where the traffic lights have broken down. Check your copy of the Highway Code for the signals that they use.</p>" // no comma here
        },
        { // Question 7
            "q": "When may you wait in a box junction?",
            "a": [
                {"option": "When you’re stationary in a queue of traffic",             "correct": false},
                {"option": "When approaching a pelican crossing",                      "correct": false},
                {"option": "When approaching a zebra crossing",                        "correct": false},
                {"option": "When oncoming traffic prevents you from turning right",    "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>The purpose of a box junction is to keep the junction clear by preventing vehicles from stopping in the path of crossing traffic. You must not enter a box junction unless your exit is clear. But you may enter the box and wait if you want to turn right and are only prevented from doing so by oncoming traffic.</p>",
            "incorrect": "<p><span>Incorrect</span>The purpose of a box junction is to keep the junction clear by preventing vehicles from stopping in the path of crossing traffic. You must not enter a box junction unless your exit is clear. But you may enter the box and wait if you <strong>want to turn right and are only prevented from doing so by oncoming traffic</strong>.</p>" // no comma here
        },
        { // Question 8
            "q": "Your vehicle has a puncture on a motorway. What should you do?",
            "a": [
                {"option": "Drive slowly to the next service area to get assistance",                                    "correct": false},
                {"option": "Pull up on the hard shoulder. Change the wheel as quickly as possible",                      "correct": false},
                {"option": "Pull up on the hard shoulder. Use the emergency phone to get assistance",                    "correct": true},
                {"option": "Switch on your hazard lights. Stop in your lane",                                            "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>Pull up on the hard shoulder and make your way to the nearest emergency telephone to call for assistance. Do not attempt to repair your vehicle while it is on the hard shoulder because of the risk posed by traffic passing at high speeds.</p>",
            "incorrect": "<p><span>Incorrect</span><strong>Pull up on the hard shoulder and make your way to the nearest emergency telephone to call for assistance</strong>. Do not attempt to repair your vehicle while it is on the hard shoulder because of the risk posed by traffic passing at high speeds.</p>" // no comma here
        },
        { // Question 9
            "q": "What does this sign tell you?<img src='images/TS4731.jpg'>",
            "a": [
                {"option": "That this is a no-through road",            "correct": false},
                {"option": "End of traffic calming road",               "correct": false},
                {"option": "Free parking zone ends",                    "correct": false},
                {"option": "No-waiting zone ends",                      "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>The blue and red circular sign on its own means that waiting restrictions are in force. This sign shows that you are leaving the controlled zone and waiting restrictions no longer apply.</p>",
            "incorrect": "<p><span>Incorrect</span>The blue and red circular sign on its own means that waiting restrictions are in force. This sign shows that you are <strong>leaving the controlled zone and waiting restrictions no longer apply</strong>.</p>" // no comma here
        }
    ]
};
