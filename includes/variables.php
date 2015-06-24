<?php
    //Paths
    $path = "../..";
    $img_path = "../../images/articles";

    //Previous and Next Articles

    $add = "+";
    $subtract = "-";

    $prev = eval('return '.$page_id.$subtract.'1'.';');
    $next = eval('return '.$page_id.$add.'1'.';');

    // Page Array
    $page = array(
    '0' => array(
        'id'    => 'contents',
        'title' => 'Contents',
        'blurb' => 'FirstCar Provisional Edition Contents Page',
        'type'  => 'articles'),
    '1' => array(
        'id'    => 'the-learning-journey',
        'title' => 'The learning journey',
        'blurb' => 'Wondering what you need to do and when? Then wonder no more.',
        'type'  => 'articles'),
    '2' => array(
        'id'    => 'marmalade-start-your-engines',
        'title' => 'Start your engines',
        'url'   => 'http://www.wearemarmalade.co.uk/learner-driver-insurance?guid=1C23A77A719E4F72990E763035391DE9',
        'type'  => 'ads'),
    '3' => array(
        'id'    => 'the-cost-of-learning-to-drive',
        'title' => 'The cost of learning to drive',
        'blurb'  => 'Learning to drive is an investment; this is how big an investment it really is.',
        'type'  => 'articles'),
    '4' => array(
        'id'    => 'marmalade-time-to-upgrade-the-wheels',
        'title' => 'Time to upgrade the wheels',
        'url'   => 'http://www.wearemarmalade.co.uk/learner-driver-insurance?guid=1C23A77A719E4F72990E763035391DE9',
        'type'  => 'ads'),
    '5' => array(
        'id'    => 'motorcycle-security',
        'title' => 'Motorcycle security',
        'blurb' => 'Keep your bike secure at home, or out and about'),
    '6' => array(
        'id'    => 'motorcycle-insurance',
        'title' => 'Motorcycle insurance',
        'blurb' => 'We’ve always got something better than insurance to spend our money on, but to stay on the right side of the law, it’s an essential purchase'),
    '7' => array(
        'id'    => 'staying-alive',
        'title' => 'Staying alive',
        'blurb' => 'If you’re new to biking you’ll be inexperienced. But if you’ve been biking for years there’s a danger you could be getting complacent'),
    '8' => array(
        'id'    => 'bsm-go',
        'title' => 'Get ready, go!',
        'url'   => 'https://driving-lessons.bsm.co.uk/bsm-driving-lessons/get-prices.do?BSESSIONID=TXwSV6TGyLgcWTyx4yxhG35Lt8xNNK1jJCpXqgTS2wQ1NH0HkyR7!153538521!NONE',
        'type'  => 'ads'),
    '9' => array(
        'id'    => 'motorcycle-maintenance',
        'title' => 'Motorcycle maintenance',
        'blurb'  => 'Needs blurb'),
    '10' => array(
        'id'    => 'motorcycle-clubs-directory',
        'title' => 'Motorcycle club\'s directory',
        'blurb' => '>Needs blurb'),
    '11' => array(
        'id'    => 'routes-to-riding',
        'title' => 'Routes to riding',
        'blurb' => 'Confused about what it takes to get onto two wheels? Here, all is explained...'),
    '12' => array(
        'id'    => 'bsm-learner-apps',
        'title' => 'Learner apps',
        'url'   => 'http://www.bsm.co.uk/existing-pupils-hub/track-record-app',
        'type'  => 'ads'),
    '13' => array(
        'id'    => 'how-to-buy-a-motorbike',
        'title' => 'How to buy a motorbike',
        'blurb' => 'Buying a motorbike can be as daunting as it is exciting. Here’s how to make sure you don’t regret your decisions',
        'type'  => 'articles'),
    '14' => array(
        'id'    => 'marmalade-prepare-for-freedom',
        'title' => 'Prepare for freedom',
        'url'   => 'http://www.wearemarmalade.co.uk/learner-driver-insurance?guid=1C23A77A719E4F72990E763035391DE9',
        'type'  => 'ads'),
    '15' => array(
        'id'    => 'competition',
        'title' => 'Competition',
        'blurb'  => 'Win over £750 worth of kit from sportsbikeshop.co.uk',
        'type'  => 'articles'),
    '16' => array(
        'id'    => 'marmalade-drive-when-you-want',
        'title' => 'Drive when you want',
        'url'   => 'http://www.wearemarmalade.co.uk/young-driver-insurance?guid=1C23A77A719E4F72990E763035391DE9',
        'type'  => 'ads'),
    '17' => array(
        'id'    => 'highway-code-quiz',
        'title' => 'Highway code quiz',
        'blurb'  => 'Blurb needed',
        'type'  => 'articles'),
    '18' => array(
        'id'    => 'protect-yourself-when-buying',
        'title' => 'Protect yourself when buying',
        'blurb'  => 'Don’t take chances when purchasing protective kit...',
        'type'  => 'articles')
    // '19' => array(
    //     'id'    => 'tso-prepare-to-pass',
    //     'title' => 'Prepare to pass',
    //     'url'   => 'http://www.safedrivingforlife.info/shop',
    //     'type'  => 'ads'),
    // '20' => array(
    //     'id'    => 'how-to-tackle-the-multiple-choice-questions',
    //     'title' => 'How to tackle the multiple choice questions',
    //     'blurb'  => 'Everything you ever needed to know about the first part of the theory test.',
    //     'type'  => 'articles'),
    // '21' => array(
    //     'id'    => 'prepare-for-the-hazard-perception-test',
    //     'title' => 'Prepare for the hazard perception test',
    //     'blurb'  => 'Everything you could possibly want to know about the second part of the test.',
    //     'type'  => 'articles'),
    // '22' => array(
    //     'id'    => 'buying-your-first-car',
    //     'title' => 'Buying your first car',
    //     'blurb'  => 'Your provisional licence is new, but it’s already time to think about a car purchase.',
    //     'type'  => 'articles'),
    // '23' => array(
    //     'id'    => 'marmalade-new-wheels-free-insurance',
    //     'title' => 'Free insurance for a year',
    //     'url'   => 'http://www.wearemarmalade.co.uk/cars-for-young-drivers?guid=1C23A77A719E4F72990E763035391DE9',
    //     'type'  => 'ads'),
    // '24' => array(
    //     'id'    => 'how-to-buy-a-used-car',
    //     'title' => 'How to buy a used car',
    //     'blurb'  => 'Don’t get stitched up; here’s how to buy a great used car for your private practice.',
    //     'type'  => 'articles'),
    // '25' => array(
    //     'id'    => 'buying-a-new-car',
    //     'title' => 'Buying a new car',
    //     'blurb'  => 'If your pockets are deeper, the sky’s the limit if you’re buying a new set of wheels.',
    //     'type'  => 'articles'),
    // '26' => array(
    //     'id'    => 'marmalade-get-a-quote-now',
    //     'title' => 'Get a quote now',
    //     'url'   => 'http://www.wearemarmalade.co.uk/young-driver-insurance?guid=1C23A77A719E4F72990E763035391DE9',
    //     'type'  => 'ads'),
    // '27' => array(
    //     'id'    => 'peer-pressure',
    //     'title' => 'Peer pressure',
    //     'blurb'  => 'As a passenger, you can cause just as much chaos as if you were driving.',
    //     'type'  => 'articles'),
    // '28' => array(
    //     'id'    => 'learning-to-drive-with-a-disability',
    //     'title' => 'Learning to drive with a disability',
    //     'blurb'  => 'Modern tech means you could be able to drive, even with a significant disability.',
    //     'type'  => 'articles'),
    // '29'  => array(
    //     'id'    => 'learning-to-drive-with-special-needs',
    //     'title' => 'Learning to drive with Special Needs',
    //     'blurb'  => 'Being dyslexic or hard of hearing is no barrier to taking your driving tests.',
    //     'type'  => 'articles')
    );


    // Learning Journey Steps
    $learning_journey_steps = array(
    '1' => array(
        'step'      => '1',
        'title'     => 'Try an under-17 driving session or join an under-17 driving club',
        'content'   => 'Why wait until you’re 17 before you first get behind the wheel? By starting before you’re able to apply for your provisional licence, you’ll feel more relaxed about the learning process as you won’t be in a rush to apply for your test.',
        'url'       => 'https://firstcar.co.uk/learning/under-17-driving'),

    '2' => array(
        'step'      => '2',
        'title'     => 'Apply for your provisional licence',
        'content'   => 'This is it – the start of your road to independence. Make sure you apply through the official website and do it in good time so you have your licence by the time your 17th birthday hits.',
        'url'       => 'https://firstcar.co.uk/learning/how-to-apply-for-a-provisional-driving-licence'),

    '3' => array(
        'step'      => '3',
        'title'     => 'Find a driving instructor',
        'content'   => 'If you don’t track down the right instructor, you won’t enjoy the learning process. It’ll also probably take longer to pass your test and it’ll then cost you more, so find someone who you get on with.',
        'url'       => 'https://firstcar.co.uk/learning/driving-instruction'),

    '4' => array(
        'step'      => '4',
        'title'     => 'Start preparing for your theory test ',
        'content'   => 'Before you can take your practical test you’ll need to get through your theory exam. And the only way to do that first time is to make sure you’re fully prepared for it.',
        'url'       => 'https://firstcar.co.uk/learning/theory-test'),

    '5' => array(
        'step'       => '5',
        'title'     => 'Begin your driving lessons ',
        'content'   => 'Once you’ve started preparing for your theory test you can start putting what you’ve learned into practice, by taking to the road for the first time, under the watchful eye of a decent driving instructor.',
        'url'       => 'https://firstcar.co.uk/learning/make-driving-lessons'),

    '6' => array(
        'step'      => '6',
        'title'     => 'Get in as much private practice as possible ',
        'content'   => 'It’s essential that you invest in some professional tuition, but it’s worth supplementing this with some private practice in the family car. Or maybe even your own car if you’ve already bought something. Either way, getting in as much practice as you can, before you take your driving test, is key.',
        'url'       => 'https://firstcar.co.uk/learning/learn-with-your-parents'),

    '7' => array(
        'step'      => '7',
        'title'     => 'Apply for your theory test ',
        'content'   => 'You obviously don’t want to take your theory test before you’re ready, but at some point it’s worth committing to a date, so you’ve got something to focus on. So get your application – via the official website only – and give yourself a date to aim for.',
        'url'       => 'https://firstcar.co.uk/learning/book-your-theory-test'),

    '8' => array(
        'step'      => '8',
        'title'     => 'Take your theory test',
        'content'   => 'OK. Now things are getting serious. You’ve been learning like mad and it’s about time you started to see the benefits of your hard work. Get through this test and you’ve despatched a major milestone in your quest to drive independently.',
        'url'       => 'https://firstcar.co.uk/learning/how-to-pass-your-theory-test'),

    '9' => array(
        'step'      => '9',
        'title'     => 'Continue your driving lessons ',
        'content'   => 'With your test out of the way you need to focus on your next goal – taking your practical driving test. So get out there as much as possible and clock up as many hours behind the wheel as you can.',
        'url'       => 'https://firstcar.co.uk/learning/driving-instruction'),

    '10' => array(
        'step'      => '10',
        'title'     => 'Apply for your practical test',
        'content'   => 'Once your driving instructor has said you’re ready for your test, get your application in. Make sure you do it only via the official website thiough, or you’ll be paying extra charges unnecessarily.',
        'url'       => 'https://firstcar.co.uk/learning/book-your-driving-test'),

    '11' => array(
        'step'      => '11',
        'title'     => 'Take your practical test',
        'content'   => 'This is it – crack this and you’ll be able to drive solo. Most people fail their driving test first time, so make sure you’re not one of them by preparing as fully as you can.',
        'url'       => 'https://firstcar.co.uk/learning/book-your-driving-test'),

    '12' => array(
        'step'      => '12',
        'title'     => 'Invest in some post-test training',
        'content'   => 'Once you’ve got your full driving licence it’s natural to want to put all forms of driving tuition behind you. But at the very least you should be thinking about some motorway tuition and ideally you’ll undertake the Pass Plus course.',
        'url'       => 'https://firstcar.co.uk/learning/post-test-training')
    );

    // Find the perfect instructor Steps
    $perfect_instructor_steps = array(
    '1' => array(
        'step'      => '1',
        'title'     => 'Go by personal recommendation',
        'content'   => 'Talk to your mates and see what they think of theirs.'),

    '2' => array(
        'step'      => '2',
        'title'     => "Don't just go for the cheapest option",
        'content'   => 'It could cost you more in the long term.'),

    '3' => array(
        'step'      => '3',
        'title'     => "Don't rely on a friend or family member to teach you",
        'content'   => "Don't rely solely on a friend or family member to teach you; the test has changed massively since your dad got his licence, so he won't know how best to guide you."),

    '4' => array(
        'step'      => '4',
        'title'     => 'Practising with a friend or relative',
        'content'   => "If you practise with a friend or relative, stay below the level you've reached with your instructor, so don't tackle busy roads in your practice sessions until you've covered them with your tutor."),

    '5' => array(
        'step'       => '5',
        'title'     => 'Same or Opposite Sex Instructors',
        'content'   => "Don't assume you'll automatically get on better with a same-sex (or opposite-sex) tutor."),
    );

    // What type of learner are you steps
    $make_the_most_of_your_lessons_steps = array(
    '1' => array(
        'step'      => '1',
        'title'     => 'Be attentive',
        'content'   => "When your instructor talks, listen, rather than switching off and hoping you'll get things right."),

    '2' => array(
        'step'      => '2',
        'title'     => "Be strategic",
        'content'   => "Book your lessons for when you're at your most alert, so if you're basically nocturnal, go for an early morning slot or as late in the day as possible."),

    '3' => array(
        'step'      => '3',
        'title'     => "Be awake",
        'content'   => "Get a decent night's sleep beforehand; partying until 4am won't help your powers of concentration."),

    '4' => array(
        'step'      => '4',
        'title'     => 'Be refreshed',
        'content'   => "Grab some food and drink before your lesson; being distracted by hunger or thirst won't help the learning process."),

    '5' => array(
        'step'       => '5',
        'title'     => 'Be friendly',
        'content'   => "Your instructor also has to be in good form and the two of you have to gel. A good instructor will be clear about what they want you to do - and why. "),
    '6' => array(
        'step'       => '6',
        'title'     => 'Be assertive',
        'content'   => "If you don't understand anything, don't be afraid to ask questions. Be assertive - but don't overdo it!"),
    '7' => array(
        'step'       => '7',
        'title'     => 'Be ready',
        'content'   => "Book 90-minute or two-hour sessions if you can - you should get a lot more out of them as you’ll have a better opportunity to get into the rhythm."),
    );

    // Peer pressure steps
    $peer_pressure = array(
    '1' => array(
        'step'      => '1',
        'title'     => 'Mobile phone',
        'content'   => "Reading a text will take several seconds; at 60mph, you’re covering 88 feet each second.",
        'url'       => 'http://micks-macbook.local:5757/firstcar/articles/peer-pressure/images/thumbnail.jpg'),

    '2' => array(
        'step'      => '2',
        'title'     => "MP3 player",
        'content'   => "Get the passengers to choose the music, or the driver can say what they want – but getting them to find the track on your MP3 player is just asking for trouble."),

    '3' => array(
        'step'      => '3',
        'title'     => "Be awake",
        'content'   => "Get a decent night's sleep beforehand; partying until 4am won't help your powers of concentration."),

    '4' => array(
        'step'      => '4',
        'title'     => 'Be refreshed',
        'content'   => "Grab some food and drink before your lesson; being distracted by hunger or thirst won't help the learning process."),

    '5' => array(
        'step'       => '5',
        'title'     => 'Be friendly',
        'content'   => "Your instructor also has to be in good form and the two of you have to gel. A good instructor will be clear about what they want you to do - and why. "),
    '6' => array(
        'step'       => '6',
        'title'     => 'Be assertive',
        'content'   => "If you don't understand anything, don't be afraid to ask questions. Be assertive - but don't overdo it!"),
    '7' => array(
        'step'       => '7',
        'title'     => 'Be ready',
        'content'   => "Book 90-minute or two-hour sessions if you can - you should get a lot more out of them as you’ll have a better opportunity to get into the rhythm."),
    );
?>

