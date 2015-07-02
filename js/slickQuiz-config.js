// Setup your quiz text and questions here

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
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
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
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
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
        { // Question 4
            "q": "You’re in a one-way street and want to turn right. You should position yourself",
            "a": [
                {"option": "In the right-hand lane",                        "correct": true},
                {"option": "In the left-hand lane",                         "correct": false},
                {"option": "In either lane, depending on the traffic",      "correct": false},
                {"option": "Just left of the centre line",                  "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>If you’re travelling in a one-way street and wish to turn right you should take up a position in the right-hand lane. This will enable other road users not wishing to turn to proceed to the left. Indicate your intention and take up your position in good time.</p>",
            "incorrect": "<p><span>Incorrect</span>If you’re travelling in a one-way street and wish to turn right you should take up a position in the <strong>right-hand lane</strong>. This will enable other road users not wishing to turn to proceed to the left. Indicate your intention and take up your position in good time." // no comma here
        },
        { // Question 5
            "q": "You’re approaching an unmarked crossroads. How should you deal with this type of junction? <img src='images/question-5.jpg'>",
            "a": [
                {"option": "Accelerate and keep to the middle",                        "correct": false},
                {"option": "Slow down and keep to the right",                          "correct": true},
                {"option": "Accelerate looking to the left",                           "correct": false},
                {"option": "Slow down and look both way",                              "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>Be extra-cautious, especially when your view is obstructed by hedges, bushes, walls and large vehicles. In the summer months these junctions can become more difficult to deal with when growing foliage may obscure your view.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>Slow down and keep to the right</strong>. Be extra-cautious, especially when your view is obstructed by hedges, bushes, walls and large vehicles. In the summer months these junctions can become more difficult to deal with when growing foliage may obscure your view.</p>" // no comma here
        },
        { // Question 6
            "q": "You stop for pedestrians waiting to cross at a zebra crossing. They do not start to cross. What should you do?",
            "a": [
                {"option": "Be patient and wait",                          "correct": true},
                {"option": "Sound your horn",                              "correct": false},
                {"option": "Carry on",                                     "correct": false},
                {"option": "Wave them to cross",                           "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>If you stop for pedestrians and they don’t start to cross don’t wave them across or sound your horn. This could be dangerous if another vehicle is approaching which hasn’t seen or heard your signal.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>Be patient and wait</strong>. If you stop for pedestrians and they don’t start to cross don’t wave them across or sound your horn. This could be dangerous if another vehicle is approaching which hasn’t seen or heard your signal.</p>" // no comma here
        },
        { // Question 7
            "q": "You’re riding towards a level crossing. What would be the first warning of an approaching train?",
            "a": [
                {"option": "Both barriers half down",                   "correct": false},
                {"option": "A steady amber light",                      "correct": true},
                {"option": "One half barrier down",                     "correct": false},
                {"option": "Twin flashing red lightst",                 "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>The steady amber light will be followed by twin flashing red lights that mean you must stop. An alarm will also sound to alert you to the fact that a train is approaching.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>A steady amber light</strong>. The steady amber light will be followed by twin flashing red lights that mean you must stop. An alarm will also sound to alert you to the fact that a train is approaching.</p>" // no comma here
        },
        { // Question 8
            "q": "What does this sign mean?<img src='images/question-8.jpg'>",
            "a": [
                {"option": "No overtaking",                          "correct": false},
                {"option": "No motor vehicles",                      "correct": true},
                {"option": "Clearway (no stopping)",                 "correct": false},
                {"option": "Cars and motorcycles only",              "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>A sign will indicate which types of vehicles are prohibited from certain roads. Make sure that you know which signs apply to the vehicle you’re using.</p>",
            "incorrect": "<p><span>Incorrect</span><strong>Correct answer: <strong>No motor vehicles</strong>.A sign will indicate which types of vehicles are prohibited from certain roads. Make sure that you know which signs apply to the vehicle you’re using.</p>" // no comma here
        },
        { // Question 9
            "q": "You’re the first to arrive at the scene of a crash. Which two of these should you do?",
            "a": [
                {"option": "Leave as soon as another road user arrives",                    "correct": false},
                {"option": "Make sure engines are switched off",                            "correct": true},
                {"option": "Drag all casualties away from the vehicles",                    "correct": false},
                {"option": "Call the emergency services promptly",                          "correct": true} // no comma here
            ],
            "select_any": true,
            "force_checkbox": true,
            "correct": "<p><span>Correct</span>At a crash scene you can help in practical ways, even if you aren’t trained in first aid. Make sure you don’t put yourself or anyone else in danger. The safest way to warn other traffic is by switching on your hazard warning lights</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answers: <strong>Make sure the engines are switched off</strong> &amp; <strong>Call the emergency services promptly</strong>. At a crash scene you can help in practical ways, even if you aren’t trained in first aid. Make sure you don’t put yourself or anyone else in danger. The safest way to warn other traffic is by switching on your hazard warning lights</p>" // no comma here
        },
        { // Question 10
            "q": "What does this sign mean?<img src='images/question-10.jpg'>",
            "a": [
                {"option": "Roundabout",                    "correct": false},
                {"option": "Crossroads",                    "correct": false},
                {"option": "No stopping",                   "correct": true},
                {"option": "No entry",                      "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>This sign is in place to ensure a clear route for traffic. Don’t stop except in an emergency.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answers: <strong>No stopping</strong>. This sign is in place to ensure a clear route for traffic. Don’t stop except in an emergency.</p>" // no comma here
        }
    ]
};
