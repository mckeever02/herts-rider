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
            "q": "In which of these situations should you avoid overtaking?<img src='images/question-1.jpg'>",
            "a": [
                {"option": "Just after a bend",                 "correct": false},
                {"option": "In a one-way street",               "correct": false},
                {"option": "On a 30mph road",                   "correct": false},
                {"option": "Approaching a dip in the road",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>As you begin to think about overtaking, ask yourself if it’s really necessary. If you can’t see well ahead stay back for a safer place to pull out.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct Answer: <strong>Approaching a dip in the road.</strong> As you begin to think about overtaking, ask yourself if it’s really necessary. If you can’t see well ahead stay back for a safer place to pull out.</p>" // no comma here
        },
        { // Question 2
            "q": "You’re travelling along a narrow country road. When passing a cyclist you should go..<img src='images/question-2.jpg'>",
            "a": [
                {"option": "Slowly, sounding your horn as you pass",          "correct": true},
                {"option": "Quickly, leaving plenty of room",                 "correct": false},
                {"option": "Slowly, leaving plenty of room",                  "correct": false},
                {"option": "Quickly, sounding the horn as you pass",          "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>Look well ahead and only pull out if it’s safe. You will need to use all of the road to pass the cyclist, so be extra-cautious. Look out for entrances to fields where tractors or other farm machinery could be waiting to pull out.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct Answer: <strong>Slowly, leaving plenty of room.</strong>Look well ahead and only pull out if it’s safe. You will need to use all of the road to pass the cyclist, so be extra-cautious. Look out for entrances to fields where tractors or other farm machinery could be waiting to pull out.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "You should never wave people across at pedestrian crossings because..<img src='images/question-3.jpg'>",
            "a": [
                {"option": "There may be another vehicle coming",               "correct": true},
                {"option": "They may not be looking",                           "correct": false},
                {"option": "It’s safer for you to carry on",                    "correct": false},
                {"option": "They may not be ready to cross",                    "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>If people are waiting to use a pedestrian crossing, slow down and be prepared to stop. Don’t wave them across the road as another driver may not have seen them, might not have seen your signal and may not be able to stop safely.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>There may be another vehicle coming</strong>. If people are waiting to use a pedestrian crossing, slow down and be prepared to stop. Don’t wave them across the road as another driver may not have seen them, might not have seen your signal and may not be able to stop safely.</p>" // no comma here
        },
        { // Question 4
            "q": "What should you use your horn for?<img src='images/question-4.jpg'>",
            "a": [
                {"option": "To alert others to your presence",                  "correct": true},
                {"option": "To allow you right of way",                         "correct": false},
                {"option": "To greet other road users",                         "correct": false},
                {"option": "To signal your annoyance",                          "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>Your horn must not be used between 11.30pm and 7am in a built-up area or when you’re stationary, unless a moving vehicle poses a danger. Its function is to alert other road users of your presence.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>To alert others to your presence</strong>. Your horn must not be used between 11.30pm and 7am in a built-up area or when you’re stationary, unless a moving vehicle poses a danger. Its function is to alert other road users of your presence." // no comma here
        },
        { // Question 5
            "q": "You’re having difficulty finding a parking space in a busy town. You can see there’s space on the zig-zag lines of a zebra crossing. Can you park there?<img src='images/question-5.jpg'>",
            "a": [
                {"option": "No, unless you stay with your bike",                "correct": false},
                {"option": "Yes, in order to drop off a passenger",             "correct": false},
                {"option": "Yes, if you do not block people from crossing",     "correct": false},
                {"option": "No, not in any circumstances",                      "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>It’s an offence to park there. You will be causing an obstruction by obscuring the view of both pedestrians and drivers.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>No, not in any circumstances</strong>. It’s an offence to park there. You will be causing an obstruction by obscuring the view of both pedestrians and drivers.</p>" // no comma here
        },
        { // Question 6
            "q": "In heavy motorway traffic the vehicle behind you is following too closely. How can you lower the risk of collision? <img src='images/question-6.jpg'>",
            "a": [
                {"option": "Increase your distance from the vehicle in front",  "correct": true},
                {"option": "Operate the brakes sharply",                        "correct": false},
                {"option": "Switch on your hazard lights",                      "correct": false},
                {"option": "Move onto the hard shoulder and stop",              "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>On busy roads traffic may still travel at high speeds despite being close together. Don’t follow the vehicle in front too closely. If a driver behind seems to be ‘pushing’ you, gradually increase your distance from the vehicle in front by slowing down gently. This will give you more space in front if you have to brake, and lessen the risk of a collision involving several vehicles.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>Increase your distance from the vehicle in front</strong>. On busy roads traffic may still travel at high speeds despite being close together. Don’t follow the vehicle in front too closely. If a driver behind seems to be ‘pushing’ you, gradually increase your distance from the vehicle in front by slowing down gently. This will give you more space in front if you have to brake, and lessen the risk of a collision involving several vehicles.</p>" // no comma here
        },
        { // Question 7
            "q": "You’re approaching a crossroads. The traffic lights have failed. What should you do? <img src='images/question-7.jpg'>",
            "a": [
                {"option": "Brake and stop only for large vehicles",            "correct": false},
                {"option": "Brake sharply to a stop before looking",            "correct": false},
                {"option": "Be prepared to brake sharply to a stop",            "correct": false},
                {"option": "Be prepared to stop for any traffic",               "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>When approaching a junction where the traffic lights have failed, you should proceed with caution. Treat the situation as an unmarked junction and be prepared to stop.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>Be prepared to stop for any traffic</strong>. When approaching a junction where the traffic lights have failed, you should proceed with caution. Treat the situation as an unmarked junction and be prepared to stop.</p>" // no comma here
        },
        { // Question 8
            "q": "You break down on a motorway. You need to call for help. Why might it be better to use an emergency roadside telephone rather than a mobile phone? <img src='images/question-8.jpg'>",
            "a": [
                {"option": "It connects you to a local garage",                 "correct": false},
                {"option": "Using a mobile phone will distract other drivers",  "correct": false},
                {"option": "It allows easy location by the emergency services", "correct": true},
                {"option": "Mobile phones do not work on motorways",            "correct": false} // no comma here
            ],
            "correct": "<p><span>Correct</span>On a motorway it’s best to use a roadside emergency telephone so that the emergency services are able to locate you easily. The nearest telephone is shown by an arrow on marker posts at the edge of the hard shoulder. If you use a mobile, they will need to know your exact location. Before you call, find out the number on the nearest marker post. This number will identify your exact location.</p>",
            "incorrect": "<p><span>Incorrect</span> Correct answer: <strong>It allows easy location by the emergency services</strong>. On a motorway it’s best to use a roadside emergency telephone so that the emergency services are able to locate you easily. The nearest telephone is shown by an arrow on marker posts at the edge of the hard shoulder. If you use a mobile, they will need to know your exact location. Before you call, find out the number on the nearest marker post. This number will identify your exact location.</p>" // no comma here
        },
        { // Question 9
            "q": "What does this sign mean?<img src='images/question-9.jpg'>",
            "a": [
                {"option": "New speed limit 20mph",                             "correct": false},
                {"option": "No vehicles over 30 tonnes",                        "correct": false},
                {"option": "Minimum speed limit 30mph",                         "correct": false},
                {"option": "End of 20mph zone",                                 "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>Where you see this sign the 20mph restriction ends. Check all around for possible hazards and only increase your speed if it’s safe to do so.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>End of 20mph zone</strong>.Where you see this sign the 20mph restriction ends. Check all around for possible hazards and only increase your speed if it’s safe to do so.</p>" // no comma here
        },
        { // Question 10
            "q": "You have just ridden past this sign. You should be aware that.. <img src='images/question-10.jpg'>",
            "a": [
                {"option": "It’s a single-track road",                          "correct": false},
                {"option": "You cannot stop on this road",                      "correct": false},
                {"option": "There is only one lane in use",                     "correct": false},
                {"option": "All traffic is going one way",                      "correct": true} // no comma here
            ],
            "correct": "<p><span>Correct</span>In a one-way system traffic may be passing you on either side. Always be aware of all traffic signs and understand their meaning. Look well ahead and react to them in good time.</p>",
            "incorrect": "<p><span>Incorrect</span>Correct answer: <strong>All traffic is going one way</strong>. In a one-way system traffic may be passing you on either side. Always be aware of all traffic signs and understand their meaning. Look well ahead and react to them in good time.</p>" // no comma here
        }
    ]
};
