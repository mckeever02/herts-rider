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
        'id'    => 'about',
        'title' => 'Welcome to Hertfordshire Rider',
        'blurb' => 'blurb needed',
        'type'  => 'articles'),
    '2' => array(
        'id'    => 'metropolis-motorcycles',
        'title' => 'Metropolis motorcycles',
        'url'   => '',
        'type'  => 'ads'),
    '3' => array(
        'id'    => 'motorcycle-security',
        'title' => 'Motorcycle security',
        'blurb' => 'Motorbikes are easy targets for thieves, which is why you need to make life as hard as possible for them. Here’s how',
        'type'  => 'articles'),
    '4' => array(
        'id'    => 'how-to-buy-the-best-motorcycle-clothing',
        'title' => 'How to buy the best motorcycle clothing',
        'blurb' => 'Wearing the right kit when riding can massively reduce the chances of injury in a crash. Here’s how to buy the best protective gear for your money',
        'type'  => 'articles'),
    '5' => array(
        'id'    => 'staying-alive',
        'title' => 'Staying alive',
        'blurb' => 'It’s easy to forget about some of the basics of biking safety, but keep on top of these and you can look forward to a great season in the saddle',
        'type'  => 'articles'),
    '6' => array(
        'id'    => 'top-10-hazards',
        'title' => 'Top 10 hazards',
        'blurb' => 'There are loads of potential problems to deal with when you’re on your bike. These are 10 of the most common Tarmac terrors. Remember, forewarned is forearmed...',
        'type'  => 'articles'),
    '7' => array(
        'id'    => 'how-motorcycle-insurance-works',
        'title' => 'How motorcycle insurance works',
        'blurb' => 'We’ve always got something better than insurance to spend our money on, but to stay on the right side of the law, it’s an essential purchase',
        'type'  => 'articles'),
    '8' => array(
        'id'    => 'moores',
        'title' => 'Moores',
        'url'   => '',
        'type'  => 'ads'),
    '9' => array(
        'id'    => 'how-to-maintain-your-motorbike',
        'title' => 'How to maintain your motorbike',
        'blurb' => 'A few quick checks before each ride could save you cash and can even make the difference between life and death',
        'type'  => 'articles'),
    '10' => array(
        'id'    => 'motorcycle-clubs-directory',
        'title' => 'Motorcycle club\'s directory',
        'blurb' => 'Fed up of riding alone? Feel like Billy No-Mates? Then join one of these groups of like-minded bikers',
        'type'  => 'articles'),
    '11' => array(
        'id'    => 'garmin',
        'title' => 'Garmin',
        'url'   => '',
        'type'  => 'ads'),
    '12' => array(
        'id'    => 'routes-to-riding',
        'title' => 'Routes to riding',
        'blurb' => 'Confused about what it takes to get onto two wheels? Here, all is explained...',
        'type'  => 'articles'),
    '13' => array(
        'id'    => 'how-to-buy-a-motorbike',
        'title' => 'How to buy a motorbike',
        'blurb' => 'Buying a motorbike can be as daunting as it is exciting. Here’s how to make sure you don’t regret your decisions',
        'type'  => 'articles'),
    '14' => array(
        'id'    => 'competition',
        'title' => 'Win over £750-worth of kit from sportsbikeshop.co.uk',
        'blurb'  => 'Win the kit you need to stay safe on your bike, thanks to sportsbikeshop.co.uk'),
    '15' => array(
        'id'    => 'highway-code-quiz',
        'title' => 'Highway code quiz',
        'blurb'  => 'Blurb needed',
        'type'  => 'articles'),
    '16' => array(
        'id'    => 'motorcycle-clothing',
        'title' => 'Motorcycle clothing: how European standards work',
        'blurb' => 'There’s some great motorcycle kit out there &mdash; and some real rubbish too. Here’s how to separate the good from the bad.',
        'type'  => 'articles'),
    '17' => array(
        'id'    => 'fire-bike',
        'title' => 'The Hertfordshire FireBike',
        'blurb' => 'Firefighters don’t just clear up after crashes &mdash; they also help to prevent them from happening in the first place',
        'type'  => 'articles'),
    '18' => array(
        'id'    => 'biker-down',
        'title' => 'The Hertfordshire Biker Down course',
        'blurb' => 'Avoiding crashes and knowing how to deal with one are skills that too many motorcyclists don’t have. But a free solution is at hand...',
        'type'  => 'articles')
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

