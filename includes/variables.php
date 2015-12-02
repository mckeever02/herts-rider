<?php
    //Paths
    $path = "../..";
    $img_path = "../../images/articles";

    $imgix_path = "https://herts-rider.imgix.net/articles/";

    $url = "http://hertfordshirerider.co.uk/";



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
        'blurb' => 'Herts Rider Contents Page',
        'type'  => 'articles',
        'button' => 'Find out more'),
    '1' => array(
        'id'    => 'about',
        'title' => 'Welcome to Hertfordshire Rider',
        'blurb' => 'Foreword by Alex Lowes - World Superbike racer and British Champion
',
        'type'  => 'articles',
        'button' => 'Find out more'),
    '2' => array(
        'id'    => 'metropolis',
        'title' => 'Metropolis motorcycles',
        'url'   => 'http://www.metropolismotorcycles.com/barnet/',
        'type'  => 'ads',
        'button' => 'View article'),
    '3' => array(
        'id'    => 'staying-alive',
        'title' => 'Staying alive',
        'blurb' => 'It’s easy to forget about some of the basics of biking safety, but keep on top of these and you can look forward to a great season in the saddle',
        'type'  => 'articles',
        'button' => 'View article'),
    '4' => array(
        'id'    => 'motorcycle-clubs-directory',
        'title' => 'Motorcycle clubs directory',
        'blurb' => 'Fed up of riding alone? Feel like Billy No-Mates? Then join one of these groups of like-minded bikers',
        'type'  => 'articles',
        'button' => 'View article'),
    '5' => array(
        'id'    => 'bmf',
        'title' => 'BMF | Pursue, promote and protect the rights of motorcyclists',
        'url'   => 'http://www.bmf.co.uk/',
        'type'  => 'ads'),
    '6' => array(
        'id'    => 'biker-down',
        'title' => 'The Hertfordshire Biker Down course',
        'blurb' => 'Avoiding crashes and knowing how to deal with one are skills that too many motorcyclists don’t have. But a free solution is at hand...',
        'type'  => 'articles',
        'button' => 'View article'),
    '7' => array(
        'id'    => 'top-10-hazards',
        'title' => 'The top 10 motorcycle hazards',
        'blurb' => 'There are loads of potential problems to deal with when you’re on your bike. These are 10 of the most common Tarmac terrors. Remember, forewarned is forearmed...',
        'type'  => 'articles',
        'button' => 'View article'),
    '8' => array(
        'id'    => 'highway-code-quiz',
        'title' => 'Highway Code quiz',
        'blurb'  => 'When was the last time you picked up a copy of the Highway Code? Test your knowledge now',
        'type'  => 'articles',
        'button' => 'View article'),
    '9' => array(
        'id'    => 'motorcycle-security',
        'title' => 'Motorcycle security',
        'blurb' => 'Motorbikes are easy targets for thieves, which is why you need to make life as hard as possible for them. Here’s how',
        'type'  => 'articles',
        'button' => 'View article'),
    '10' => array(
        'id'    => 'moores',
        'title' => 'Moores | New &amp; used motorcycles, mopeds and scooters',
        'url'   => 'http://www.mooresmotorcycles.co.uk/',
        'type'  => 'ads'),
    '11' => array(
        'id'    => 'how-to-buy-the-best-motorcycle-clothing',
        'title' => 'How to buy the best motorcycle clothing',
        'blurb' => 'Wearing the right kit when riding can massively reduce the chances of injury in a crash. Here’s how to buy the best protective gear for your money',
        'type'  => 'articles',
        'button' => 'View article'),
    '12' => array(
        'id'    => 'how-motorcycle-insurance-works',
        'title' => 'How motorcycle insurance works',
        'blurb' => 'We’ve always got something better than insurance to spend our money on, but to stay on the right side of the law, it’s an essential purchase',
        'type'  => 'articles',
        'button' => 'View article'),
    '13' => array(
        'id'    => 'competition',
        'title' => 'Win £750-worth of biking kit',
        'blurb'  => 'Win the kit you need to stay safe on your bike, thanks to sportsbikeshop.co.uk',
        'type'  => 'articles',
        'button' => 'View article'),
    '14' => array(
        'id'    => 'garmin',
        'title' => 'Garmin | Your adventure is ready for the big screen',
        'url'   => 'http://garmin.com/zumo',
        'type'  => 'ads'),
    '15' => array(
        'id'    => 'motorcycle-clothing',
        'title' => 'Motorcycle clothing: how European standards work',
        'blurb' => 'There’s some great motorcycle kit out there &mdash; and some real rubbish too. Here’s how to separate the good from the bad.',
        'type'  => 'articles',
        'button' => 'View article'),
    '16' => array(
        'id'    => 'fire-bike',
        'title' => 'The Hertfordshire FireBike',
        'blurb' => 'Firefighters don’t just clear up after crashes &mdash; they also help to prevent them from happening in the first place',
        'type'  => 'articles',
        'button' => 'View article'),
    '17' => array(
        'id'    => 'how-to-maintain-your-motorbike',
        'title' => 'How to maintain your motorbike',
        'blurb' => 'A few quick checks before each ride could save you cash and can even make the difference between life and death',
        'type'  => 'articles',
        'button' => 'View article'),
    '18' => array(
        'id'    => 'routes-to-riding',
        'title' => 'Routes to riding',
        'blurb' => 'Confused about what it takes to get onto two wheels? Here, all is explained...',
        'type'  => 'articles',
        'button' => 'View article'),
    '19' => array(
        'id'    => 'how-to-buy-a-motorbike',
        'title' => 'How to buy a motorbike',
        'blurb' => 'Buying a motorbike can be as daunting as it is exciting. Here’s how to make sure you don’t regret your decisions',
        'type'  => 'articles',
        'button' => 'View article'),
    '20' => array(
        'id'    => 'how-to-save-money',
        'title' => 'How To Save £3,750',
        'blurb' => 'Thinking of buying an £11,900 R1200GS? Take a moment to jump on an £8,149 Yamaha Tracer instead. You might just save yourself four grand',
        'type'  => 'articles',
        'button' => 'View article'),
    '21' => array(
        'id'    => 'ten-of-the-best',
        'title' => 'Ten of the Best',
        'blurb' => 'Ever lost your keys and wished for a way to find them? Ever fancied a flip-up lid that goes all the way back? Ever wanted leathers that are tailor-made for your body? Read on for some of the best and most alternative products in motorcycling',
        'type'  => 'articles',
        'button' => 'View article')
    );

    // Page Array
    $page_issue2 = array(
    '0' => array(
        'id'    => 'contents',
        'title' => 'Contents',
        'blurb' => 'Herts Rider Contents Page',
        'type'  => 'articles',
        'button' => 'Find out more'),
    '1' => array(
        'id'    => 'about',
        'title' => 'Welcome to Hertfordshire Rider',
        'blurb' => 'Foreword by Alex Lowes - World Superbike racer and British Champion',
        'type'  => 'articles',
        'button' => 'Find out more'),
    '2' => array(
        'id'    => 'metropolis',
        'title' => 'Metropolis motorcycles',
        'url'   => 'http://www.metropolismotorcycles.com/barnet/',
        'type'  => 'ads',
        'button' => 'View article'),
    '3' => array(
        'id'    => 'winter-riding',
        'title' => 'Winter Riding',
        'blurb' => 'Modern kit, clothing and bikes give British bikers the chance to really extend our biking year – if we want to',
        'type'  => 'articles',
        'button' => 'View article'),
    '4' => array(
        'id'    => 'hertforshire-to-china',
        'title' => 'Hertfordshire to China',
        'blurb' => 'Nick Gorringe is a 43-year old man with an understanding wife and a bike-mad son. He’s a lucky man because in 2014 he decided to take some time out after selling his business; his plan was to do something seriously adventurous. With a background in sailing and yachting Nick is no stranger to adventure, but with limited motorcycling experience (limited to day trips in the UK), a major global expedition was always going to be a major eye opener. But that didn’t stop him taking the plunge...',
        'type'  => 'articles',
        'button' => 'View article'),
    '5' => array(
        'id'    => 'art-of-motorcycle-riding',
        'title' => 'Zen and the art of motorcycle riding',
        'blurb' => 'Whether you’re a new rider or a grizzly seasoned dispatcher, one key quality all riders need is self-awareness. I don’t mean you need to take an existential journey into the meaning of existence and your place within it, but you do need to have some idea of how you react to difference circumstances and situations.',
        'type'  => 'articles',
        'button' => 'View article'),
    '6' => array(
        'id'    => 'road-to-hell',
        'title' => 'Road to hell?',
        'blurb' => 'When Rob Box decided to commute by bike he was under pressure to prove himself. Or so he thought...',
        'type'  => 'articles',
        'button' => 'View article'),
    '7' => array(
        'id'    => 'competition',
        'title' => 'Win £750-worth of biking kit',
        'blurb'  => 'Win the kit you need to stay safe on your bike, thanks to sportsbikeshop.co.uk',
        'type'  => 'articles',
        'button' => 'View article'),
    '8' => array(
        'id'    => 'john-oliver-column',
        'title' => 'John Oliver column',
        'blurb'  => 'blurb needed',
        'type'  => 'articles',
        'button' => 'View article'),
    '9' => array(
        'id'    => 'theory-test-quiz',
        'title' => 'Theory test quiz',
        'blurb' => 'Blurb needed',
        'type'  => 'articles',
        'button' => 'View article'),
    '10' => array(
        'id'    => 'maintenance-tips-and-hints',
        'title' => 'Top five maintenance hacks',
        'blurb' => 'Modern bikes are harder to work on than ever, as their makers want you to pay a franchised dealer to carry out even the most simple tasks. But there’s still plenty you can do...',
        'type'  => 'articles',
        'button' => 'View article'),
    '11' => array(
        'id'    => 'the-big-softy',
        'title' => 'The big softy…',
        'blurb' => 'The Yamaha XJR1300 has seen some big changes after 20 years or so…',
        'type'  => 'articles',
        'button' => 'View article'),
    '12' => array(
        'id'    => 'How-to-buy-the-right-kit',
        'title' => 'How to buy the right kit',
        'blurb' => 'Making sure you’re well protected is at least as important as picking the right bike, but modern biking kit isn’t as bulky or as expensive as it was. There’s suitable kit available for every budget – you really don’t have to break the bank to be protected against incidents and the elements.',
        'type'  => 'articles',
        'button' => 'View article'),
    '13' => array(
        'id'    => 'product-reviews',
        'title' => 'new-product-reviews',
        'blurb' => 'blurb needed',
        'type'  => 'articles',
        'button' => 'View article'),
    '14' => array(
        'id'    => 'bikestop',
        'title' => 'Bike Stop',
        'url'   => 'http://www.bikestop.co.uk',
        'type'  => 'ads',
        'button' => 'View article'),
    '15' => array(
        'id'    => 'motorcycle-clubs-directory',
        'title' => 'Motorcycle clubs directory',
        'blurb' => 'Fed up of riding alone? Feel like Billy No-Mates? Then join one of these groups of like-minded bikers',
        'type'  => 'articles',
        'button' => 'View article'),
    '16' => array(
        'id'    => 'bmf',
        'title' => 'BMF | Pursue, promote and protect the rights of motorcyclists',
        'url'   => 'http://www.bmf.co.uk/',
        'type'  => 'ads'),
    '17' => array(
        'id'    => 'biker-down',
        'title' => 'The Hertfordshire Biker Down course',
        'blurb' => 'Avoiding crashes and knowing how to deal with one are skills that too many motorcyclists don’t have. But a free solution is at hand...',
        'type'  => 'articles',
        'button' => 'View article'),
    '18' => array(
        'id'    => 'fire-bike',
        'title' => 'The Hertfordshire FireBike',
        'blurb' => 'Firefighters don’t just clear up after crashes &mdash; they also help to prevent them from happening in the first place',
        'type'  => 'articles',
        'button' => 'View article'),
    '19' => array(
        'id'    => 'routes-to-riding',
        'title' => 'Routes to riding',
        'blurb' => 'Confused about what it takes to get onto two wheels? Here, all is explained...',
        'type'  => 'articles',
        'button' => 'View article'),
    '20' => array(
        'id'    => 'motorcycle-security',
        'title' => 'Motorcycle security',
        'blurb' => 'Motorbikes are easy targets for thieves, which is why you need to make life as hard as possible for them. Here’s how',
        'type'  => 'articles',
        'button' => 'View article')
    );


    // Learning Journey Steps
    $top10_hazards_steps = array(
    '1' => array(
        'step'      => '1',
        'title'     => 'Potholes',
        'content'   => 'A real menace to bikers, so look well ahead and adjust your speed when riding down poorly surfaced roads; take avoiding action if you see any craters. Puddles can hide large potholes, so be wary when riding through them.'),

    '2' => array(
        'step'      => '2',
        'title'     => 'Oil or diesel spills ',
        'content'   => 'Oil and diesel forms a slick layer on the tarmac which can be as slippery as ice. Hard to spot, it can catch you unaware. Keep an eye out for rainbow-coloured markings on the road and slow down. Often you can smell diesel spills too. If you lose grip mid-corner, roll off the throttle and avoid using the brakes, as the wheels can lock up.'),

    '3' => array(
        'step'      => '3',
        'title'     => 'Manholes and drain covers',
        'content'   => 'Unless they’re raised or loose, you shouldn’t have an issue with riding over drains and manholes in the dry &mdash; but in the wet they can be very slippery. This isn’t such an issue if riding in a straight line, but hit one mid-corner and it can be a scary experience. In the wet try to alter your line through a corner to avoid drains or manholes where possible but, if it’s unavoidable, slow down and keep the bike as upright as possible.'),

    '4' => array(
        'step'      => '4',
        'title'     => 'Mud',
        'content'   => 'More of a problem on country lanes than major routes, mud on the road can be a danger, especially if you need to brake or turn. When riding on a country lane, look at the road surface when you see an entrance to a field, especially if it’s wet, and plan to slow or take avoiding action if necessary. This can also apply to the exits of building sites.'),

    '5' => array(
        'step'       => '5',
        'title'     => 'Gravel',
        'content'   => 'Loose stones on the road surface can reduce grip, so look for signs that indicate a road with a loose surface and slow accordingly. Gravel can also build up on the outside of roundabouts, so try not to ride in this outer edge.'),

    '6' => array(
        'step'      => '6',
        'title'     => 'Standing water',
        'content'   => 'Bikes tend not to aquaplane as much as cars because the more rounded tyres can disperse water more efficiently. But riding through standing water can still be a hazard for a biker as it can obscure your view of the Tarmac beneath, hiding more dangerous hazards.'),

    '7' => array(
        'step'      => '7',
        'title'     => 'Black ice',
        'content'   => 'A thin layer of ice on the road can be one of the trickiest hazards to deal with. Often found in shaded areas, where the sun hasn’t thawed the Tarmac, it’s almost impossible to see as it takes on the colour of the underlying road. Approach any potential areas with caution and try to keep the bike upright through any bends and reduce your speed.'),

    '8' => array(
        'step'      => '8',
        'title'     => 'Painted areas',
        'content'   => 'Any part of the road that’s been painted could be a hazard, especially when wet. Road markings can become very slippery when wet, so avoid riding on them if you can.'),

    '9' => array(
        'step'      => '9',
        'title'     => 'Road repairs',
        'content'   => 'Some road repairs may not be smooth and level and can upset the balance of your bike, while others may be flat, but if fixed with bitumen, can still have very slippery areas in the wet. Keep your eyes peeled and slow down if necessary.'),

    '10' => array(
        'step'      => '10',
        'title'     => 'Animals',
        'content'   => 'Animals running into the road can lead to serious accidents. Being so unpredictable, it can be hard to know how best to act if an animal runs out in front of you, as swerving may result in you losing control and having a bigger crash. Cutting speed in areas where animals or wildlife may be present, can give you valuable time to react. ')
    );


?>
