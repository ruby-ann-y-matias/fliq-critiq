<?php

use Illuminate\Database\Seeder;
use App\Flick;

class FlicksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flick = new Flick();
        $flick->title = '1922';
        $flick->description = "A farmer pens a confession admitting to his wife's murder, but her death is just the beginning of a macabre tale. Based on Stephen King's novella.";
        $flick->sm_image = 'img/sm-1922.jpg';
        $flick->md_image = 'img/md-1922.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 42m';
        $flick->save();

    	$flick = new Flick();
        $flick->title = '5 Centimeters Per Second';
        $flick->description = 'Inseparable fourth-graders Takaki Tonoo and Akari Shinohara -- bonded by a love of books -- begin to slowly drift apart when their families relocate.';
        $flick->sm_image = 'img/sm-5cm.jpg';
        $flick->md_image = 'img/md-5cm.jpg';
        $flick->year = '2007';
        $flick->age_limit = '7+';
        $flick->duration = '1h 2m';
        $flick->save();

        $flick = new Flick();
        $flick->title = '91 Days';
        $flick->description = 'In the midst of the Prohibition era, Angelo Lagusa seeks to avenge his father by infiltrating a mafia family and befriending its scion Nero Vanetti.';
        $flick->sm_image = 'img/sm-91days.jpg';
        $flick->md_image = 'img/md-91days.jpg';
        $flick->year = '2016';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Abstract The Art of Design';
        $flick->description = 'Step inside the minds of the most innovative designers in a variety of disciplines and learn how design impacts every aspect of life.';
        $flick->sm_image = 'img/sm-abstract.jpg';
        $flick->md_image = 'img/md-abstract.jpg';
        $flick->year = '2017';
        $flick->age_limit = '13+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = "A Gentleman's Dignity";
        $flick->description = 'Four highly accomplished men in their 40s navigate life and romance to find love and success in urban Korea in this male answer to "Sex and the City."';
        $flick->sm_image = 'img/sm-gentleman.jpg';
        $flick->md_image = 'img/md-gentleman.jpg';
        $flick->year = '2012';
        $flick->age_limit = '13+';
        $flick->duration = '1 Season';
        $flick->save();

    	$flick = new Flick();
        $flick->title = 'Ajin Demi Human';
        $flick->description = 'A teenager discovers that he is an Ajin and flees before the authorities experiment on him. Other Ajin plan to fight back and he must choose a side.';
        $flick->sm_image = 'img/sm-ajin.jpg';
        $flick->md_image = 'img/md-ajin.jpg';
        $flick->year = '2016';
        $flick->age_limit = '16+';
        $flick->duration = '2 Seasons';
        $flick->save();

    	$flick = new Flick();
        $flick->title = 'Annihilation';
        $flick->description = 'When her husband vanishes during a secret mission, biologist Lena joins an expedition into a mysterious region sealed off by the U.S. government.';
        $flick->sm_image = 'img/sm-annihilation.jpg';
        $flick->md_image = 'img/md-annihilation.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '1h 55m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Anthony Bourdain: No Reservations';
        $flick->description = 'Outspoken chef, author and culinary adventurer Anthony Bourdain scours the globe in search of all the edible treasures the world has to offer.';
        $flick->sm_image = 'img/sm-bourdain.jpg';
        $flick->md_image = 'img/md-bourdain.jpg';
        $flick->year = '2012';
        $flick->age_limit = '13+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Are We Done Yet?';
        $flick->description = 'A newlywed couple moves into a fixer-upper in the suburbs, but their happy new life together is thrown into disarray by an oddball contractor.';
        $flick->sm_image = 'img/sm-arewe.jpg';
        $flick->md_image = 'img/md-arewe.jpg';
        $flick->year = '2007';
        $flick->age_limit = '7+';
        $flick->duration = '1h 32m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Atelier';
        $flick->description = "A young 'fabric geek' lands a job at an upscale Japanese lingerie company -- and quickly discovers she'll need help to survive.";
        $flick->sm_image = 'img/sm-atelier.jpg';
        $flick->md_image = 'img/md-atelier.jpg';
        $flick->year = '2015';
        $flick->age_limit = '7+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Atypical';
        $flick->description = 'When a teen on the autism spectrum decides to get a girlfriend, his bid for more independence puts his whole family on a path of self-discovery.';
        $flick->sm_image = 'img/sm-atypical.jpg';
        $flick->md_image = 'img/md-atypical.jpg';
        $flick->year = '2017';
        $flick->age_limit = '13+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'B The Beginning';
        $flick->description = 'Genius investigator Keith Flick rejoins the royal police force just as serial killer "B" emerges. Mysterious youth Koku may be an ally, or a target.';
        $flick->sm_image = 'img/sm-b.jpg';
        $flick->md_image = 'img/md-b.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Birdshot';
        $flick->description = 'A sheltered farm girl inadvertently shoots an endangered Philippine eagle, setting off a police investigation that exposes violence and corruption.';
        $flick->sm_image = 'img/sm-birdshot.jpg';
        $flick->md_image = 'img/md-birdshot.jpg';
        $flick->year = '2016';
        $flick->age_limit = '16+';
        $flick->duration = '1h 55m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Black';
        $flick->description = 'A Grim Reaper, a detective and a woman who foresees death get ensnared in matters of life and death -- and dark mysteries of twenty years past.';
        $flick->sm_image = 'img/sm-black.jpg';
        $flick->md_image = 'img/md-black.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Black Hawk Down';
        $flick->description = 'When U.S. forces attempt to capture two underlings of a Somali warlord, their helicopters are shot down and the Americans suffer heavy casualties.';
        $flick->sm_image = 'img/sm-blackhawk.jpg';
        $flick->md_image = 'img/md-blackhawk.jpg';
        $flick->year = '2001';
        $flick->age_limit = '16+';
        $flick->duration = '2h 24m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Black Mirror';
        $flick->description = "This sci-fi anthology series explores a twisted, high-tech near-future where humanity's greatest innovations and darkest instincts collide...";
        $flick->sm_image = 'img/sm-blackmirror.jpg';
        $flick->md_image = 'img/md-blackmirror.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '4 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Blade of the Immortal';
        $flick->description = "Cursed with immortality, skilled swordsman Manji agrees to become a young girl's bodyguard, swearing to avenge the slaying of her family.";
        $flick->sm_image = 'img/sm-blade.jpg';
        $flick->md_image = 'img/md-blade.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '2h 21m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Breaking Bad';
        $flick->description = "A high school chemistry teacher dying of cancer teams with a former student to secure his family's future by manufacturing and selling crystal meth.";
        $flick->sm_image = 'img/sm-breakingbad.jpg';
        $flick->md_image = 'img/md-breakingbad.jpg';
        $flick->year = '2013';
        $flick->age_limit = '16+';
        $flick->duration = '5 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Bridesmaids';
        $flick->description = "When an underemployed baker becomes her best friend's maid-of-honor, she almost ruins the big day due to her competition with the other bridesmaids.";
        $flick->sm_image = 'img/sm-bridesmaids.jpg';
        $flick->md_image = 'img/md-bridesmaids.jpg';
        $flick->year = '2011';
        $flick->age_limit = '16+';
        $flick->duration = '2h 4m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Bruce Almighty';
        $flick->description = 'When TV reporter Bruce Nolan angrily ridicules God, the Almighty responds by giving Bruce all His divine powers. But can Bruce improve on perfection?';
        $flick->sm_image = 'img/sm-bruce.jpg';
        $flick->md_image = 'img/md-bruce.jpg';
        $flick->year = '2003';
        $flick->age_limit = '13+';
        $flick->duration = '1h 41m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Captain America: Civil War';
        $flick->description = "It's Avengers vs. Avengers when Captain America fights to keep his superhero friends independent, while his pal Iron Man supports government control.";
        $flick->sm_image = 'img/sm-civilwar.jpg';
        $flick->md_image = 'img/md-civilwar.jpg';
        $flick->year = '2016';
        $flick->age_limit = '13+';
        $flick->duration = '2h 29m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'CSI: Crime Scene Investigation';
        $flick->description = "Using state-of-the-art forensic methods, the Las Vegas Police Department's Crime Scene Investigation bureau solves Sin City's most baffling murders.";
        $flick->sm_image = 'img/sm-csi.jpg';
        $flick->md_image = 'img/md-csi.jpg';
        $flick->year = '2015';
        $flick->age_limit = '16+';
        $flick->duration = '4 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Daredevil';
        $flick->description = "Blinded as a young boy, Matt Murdock fights injustice by day as a lawyer and by night as the Super Hero Daredevil in Hell's Kitchen, New York City.";
        $flick->sm_image = 'img/sm-daredevil.jpg';
        $flick->md_image = 'img/md-daredevil.jpg';
        $flick->year = '2016';
        $flick->age_limit = '16+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Dexter';
        $flick->description = 'By day, mild-mannered Dexter is a blood-spatter analyst for the Miami police. But at night, he is a serial killer who only targets other murderers.';
        $flick->sm_image = 'img/sm-dexter.jpg';
        $flick->md_image = 'img/md-dexter.jpg';
        $flick->year = '2013';
        $flick->age_limit = '16+';
        $flick->duration = '8 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = "Dragon's Den";
        $flick->description = 'Would-be tycoons seek investment money by pitching products to a lineup of five wealthy business leaders in exchange for equity in their companies.';
        $flick->sm_image = 'img/sm-dragon.jpg';
        $flick->md_image = 'img/md-dragon.jpg';
        $flick->year = '2016';
        $flick->age_limit = '7+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Devilman Crybaby';
        $flick->description = "Ryo's actions and motives remain a mystery to himself, so he revisits his past for answers. Miki's father searches for his missing wife and son.";
        $flick->sm_image = 'img/sm-devilman.jpg';
        $flick->md_image = 'img/md-devilman.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Elementary';
        $flick->description = "In this modern twist on the classic story, legendary sleuth Sherlock Holmes solves the NYPD's most difficult cases with the help of Dr. Joan Watson.";
        $flick->sm_image = 'img/sm-elementary.jpg';
        $flick->md_image = 'img/md-elementary.jpg';
        $flick->year = '2017';
        $flick->age_limit = '13+';
        $flick->duration = '5 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Erased';
        $flick->description = "Satoru Fujinuma can travel back in time to save others' lives. When he wakes up 18 years in the past, he has a chance to save his murdered classmates.";
        $flick->sm_image = 'img/sm-erased.jpg';
        $flick->md_image = 'img/md-erased.jpg';
        $flick->year = '2016';
        $flick->age_limit = '13+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Fate Apocrypha';
        $flick->description = 'The theft of the Greater Grail from Fuyuki City leads to a splintered timeline in which the Great Holy Grail War is waged on an unprecedented scale.';
        $flick->sm_image = 'img/sm-fate.jpg';
        $flick->md_image = 'img/md-fate.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Forgotten';
        $flick->description = 'When his abducted brother returns seemingly a different man with no memory of the past 19 days, Jin-seok chases after the truth behind the kidnapping.';
        $flick->sm_image = 'img/sm-forgotten.jpg';
        $flick->md_image = 'img/md-forgotten.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 48m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Fullmetal Alchemist';
        $flick->description = "While alchemist Edward Elric searches for a way to restore his brother Al's body, the military government and mysterious monsters are watching closely.";
        $flick->sm_image = 'img/sm-fullmetal.jpg';
        $flick->md_image = 'img/md-fullmetal.jpg';
        $flick->year = '2017';
        $flick->age_limit = '13+';
        $flick->duration = '2h 14m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Get Smart';
        $flick->description = 'When the identities of secret agents are compromised, hapless Maxwell Smart teams with far more capable Agent 99 to thwart an evil terrorist group.';
        $flick->sm_image = 'img/sm-getsmart.jpg';
        $flick->md_image = 'img/md-getsmart.jpg';
        $flick->year = '2008';
        $flick->age_limit = '13+';
        $flick->duration = '1h 49m';
        $flick->save();

        $flick = new Flick();
        $flick->title = "Gerald's Game";
        $flick->description = "When her husband's sex game goes wrong, Jessie -- handcuffed to a bed in a remote lake house -- faces warped visions, dark secrets and a dire choice.";
        $flick->sm_image = 'img/sm-gerald.jpg';
        $flick->md_image = 'img/md-gerald.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 43m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Girls Incarcerated';
        $flick->description = 'At Madison Juvenile Correctional Facility in Indiana, teen girls struggle with conflict and heartbreak as they try to turn their lives around.';
        $flick->sm_image = 'img/sm-girls.jpg';
        $flick->md_image = 'img/md-girls.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Haikyu!!';
        $flick->description = 'Inspired by a championship match he sees on TV, junior high schooler Hinata joins a volleyball club and begins training, despite his short height.';
        $flick->sm_image = 'img/sm-haikyu.jpg';
        $flick->md_image = 'img/md-haikyu.jpg';
        $flick->year = '2014';
        $flick->age_limit = '7+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Honeymoon';
        $flick->description = 'A psychotic doctor kidnaps his neighbor and locks her in a dungeon, where he uses twisted conditioning methods to make her submit to being his wife.';
        $flick->sm_image = 'img/sm-honeymoon.jpg';
        $flick->md_image = 'img/md-honeymoon.jpg';
        $flick->year = '2015';
        $flick->age_limit = '18+';
        $flick->duration = '1h 36m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'House of Cards';
        $flick->description = "A ruthless politician will stop at nothing to conquer Washington, D.C., in this Emmy and Golden Globe-winning political drama.";
        $flick->sm_image = 'img/sm-house.jpg';
        $flick->md_image = 'img/md-house.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '5 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'How to Get Away with Murder';
        $flick->description = 'Brilliant criminal defense attorney and law professor Annalise Keating, plus five of her students, become involved in a twisted murder case.';
        $flick->sm_image = 'img/sm-htgawm.jpg';
        $flick->md_image = 'img/md-htgawm.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '3 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Hush';
        $flick->description = 'A deaf writer who retreated into the woods to live a solitary life must fight for her life in silence when a masked killer appears in her window.';
        $flick->sm_image = 'img/sm-hush.jpg';
        $flick->md_image = 'img/md-hush.jpg';
        $flick->year = '2016';
        $flick->age_limit = '16+';
        $flick->duration = '1h 21m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Icarus';
        $flick->description = "In his Oscar-winning film, an American cyclist plunges into a vast doping scandal involving a Russian scientist -- Putin's most-wanted whistleblower.";
        $flick->sm_image = 'img/sm-icarus.jpg';
        $flick->md_image = 'img/md-icarus.jpg';
        $flick->year = '2017';
        $flick->age_limit = '13+';
        $flick->duration = '2h 1m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Inside Man';
        $flick->description = "A detective matches wits with a thief who's always one step ahead of the cops, and when a loose-cannon negotiator arrives, things spin out of control.";
        $flick->sm_image = 'img/sm-insideman.jpg';
        $flick->md_image = 'img/md-insideman.jpg';
        $flick->year = '2006';
        $flick->age_limit = '16+';
        $flick->duration = '2h 8m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Johnny English Reborn';
        $flick->description = 'Bumbling spy Johnny English sharpens his skills at a Tibetan monastery and returns to service to protect the Chinese premier from an assassin.';
        $flick->sm_image = 'img/sm-johnny.jpg';
        $flick->md_image = 'img/md-johnny.jpg';
        $flick->year = '2011';
        $flick->age_limit = '13+';
        $flick->duration = '1h 41m';
        $flick->save();


        $flick = new Flick();
        $flick->title = 'Jo Koy';
        $flick->description = "Between raising a teenage boy and growing up with a Filipino mother, stand-up comic Jo Koy has been through a lot. He's here to tell you all about it.";
        $flick->sm_image = 'img/sm-jokoy.jpg';
        $flick->md_image = 'img/md-jokoy.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 2m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Kakegurui';
        $flick->description = 'High roller Yumeko Jabami plans to clean house at Hyakkaou Private Academy, a school where students are evaluated solely on their gambling skills.';
        $flick->sm_image = 'img/sm-kakegurui.jpg';
        $flick->md_image = 'img/md-kakegurui.jpg';
        $flick->year = '2017';
        $flick->age_limit = '13+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Knocked Up';
        $flick->description = 'A one-night stand results in an unexpected pregnancy for Alison, who tries to make things work with the slacker who knocked her up.';
        $flick->sm_image = 'img/sm-knockedup.jpg';
        $flick->md_image = 'img/md-knockedup.jpg';
        $flick->year = '2007';
        $flick->age_limit = '16+';
        $flick->duration = '2h 9m';
        $flick->save();

        $flick = new Flick();
        $flick->title = "Lemony Snicket's A Series of Unfortunate Events";
        $flick->description = 'After their parents are tragically killed, three orphans are taken in by the dastardly Count Olaf, who hopes to snatch their inheritance from them.';
        $flick->sm_image = 'img/sm-lemony.jpg';
        $flick->md_image = 'img/md-lemony.jpg';
        $flick->year = '2004';
        $flick->age_limit = '7+';
        $flick->duration = '1h 48m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Life as We Know It';
        $flick->description = "Holly and Eric discover reciprocal hatred during their first date, but must put their feelings aside after becoming guardians of their friends' baby.";
        $flick->sm_image = 'img/sm-life.jpg';
        $flick->md_image = 'img/md-life.jpg';
        $flick->year = '2010';
        $flick->age_limit = '13+';
        $flick->duration = '1h 54m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Lost in Translation';
        $flick->description = "Two lost souls visiting Tokyo -- the neglected wife of a photographer and a washed-up movie star -- find solace in each other's company.";
        $flick->sm_image = 'img/sm-lost.jpg';
        $flick->md_image = 'img/md-lost.jpg';
        $flick->year = '2003';
        $flick->age_limit = '13+';
        $flick->duration = '1h 41m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Lucid Dream';
        $flick->description = 'After searching for his abducted son for three years, a devastated father attempts to track down his missing child through lucid dreams.';
        $flick->sm_image = 'img/sm-lucid.jpg';
        $flick->md_image = 'img/md-lucid.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 41m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Mad Men';
        $flick->description = 'Set in 1960s New York City, this award-winning series takes a peek inside an ad agency during an era when the cutthroat business had a glamorous lure.';
        $flick->sm_image = 'img/sm-madmen.jpg';
        $flick->md_image = 'img/md-madmen.jpg';
        $flick->year = '2015';
        $flick->age_limit = '16+';
        $flick->duration = '7 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Making a Murderer';
        $flick->description = 'Filmed over 10 years, this real-life thriller follows a DNA exoneree who, while exposing police corruption, becomes a suspect in a grisly new crime.';
        $flick->sm_image = 'img/sm-making.jpg';
        $flick->md_image = 'img/md-making.jpg';
        $flick->year = '2015';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Million Yen Women';
        $flick->description = 'Five beautiful but mysterious women move in with unsuccessful novelist Shin, who manages their odd household in exchange for a tidy monthly sum.';
        $flick->sm_image = 'img/sm-million.jpg';
        $flick->md_image = 'img/md-million.jpg';
        $flick->year = '2017';
        $flick->age_limit = '13+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Mindfulness and Murder';
        $flick->description = 'When a homeless boy is slain in a Buddhist temple, a cop-turned-monk spearheads an investigation and uncovers the dark side of his fellow monastics.';
        $flick->sm_image = 'img/sm-mindfulness.jpg';
        $flick->md_image = 'img/md-mindfulness.jpg';
        $flick->year = '2011';
        $flick->age_limit = '13+';
        $flick->duration = '1h 30m';
        $flick->save();

    	$flick = new Flick();
        $flick->title = 'Narcos';
        $flick->description = "The true story of Colombia's infamously violent and powerful drug cartels fuels this gritty gangster drama series.";
        $flick->sm_image = 'img/sm-narcos.jpg';
        $flick->md_image = 'img/md-narcos.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '3 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Newness';
        $flick->description = 'Martin and Gabi try to form a relationship after meeting through a hookup app, but when boredom creeps in, they seek out an unconventional solution.';
        $flick->sm_image = 'img/sm-newness.jpg';
        $flick->md_image = 'img/md-newness.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 57m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Okja';
        $flick->description = 'A gentle giant and the girl who raised her are caught in the crossfire between animal activism, corporate greed and scientific ethics.';
        $flick->sm_image = 'img/sm-okja.jpg';
        $flick->md_image = 'img/md-okja.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '2h 1m';
        $flick->save();

        $flick = new Flick();
        $flick->title = "Ocean's Eleven";
        $flick->description = 'Less than 24 hours into his parole, charismatic Danny Ocean is already rolling out his next plan: stealing more than $150 million from three casinos.';
        $flick->sm_image = 'img/sm-ocean.jpg';
        $flick->md_image = 'img/md-ocean.jpg';
        $flick->year = '2001';
        $flick->age_limit = '13+';
        $flick->duration = '1h 56m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Old Boy';
        $flick->description = 'With no clue how he came to be imprisoned, drugged and tortured for 15 years, a desperate businessman seeks revenge on his captors.';
        $flick->sm_image = 'img/sm-oldboy.jpg';
        $flick->md_image = 'img/md-oldboy.jpg';
        $flick->year = '2003';
        $flick->age_limit = '16+';
        $flick->duration = '1h 59m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Orange is the New Black';
        $flick->description = "A privileged New Yorker ends up in a women's prison when a past crime catches up with her in this Emmy-winning series from the creator of 'Weeds.'";
        $flick->sm_image = 'img/sm-orange.jpg';
        $flick->md_image = 'img/md-orange.jpg';
        $flick->year = '2013';
        $flick->age_limit = '16+';
        $flick->duration = '5 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Pan';
        $flick->description = 'As a kind of prequel to the Peter Pan story, this fantasy relates how Peter first met and initially befriended Captain Hook and fought alongside him.';
        $flick->sm_image = 'img/sm-pan.jpg';
        $flick->md_image = 'img/md-pan.jpg';
        $flick->year = '2015';
        $flick->age_limit = '7+';
        $flick->duration = '1h 51m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Penny Dreadful';
        $flick->description = 'The classic tales of Dracula, Frankenstein, Dorian Gray and more are woven together in this horror series set on the dark streets of Victorian London.';
        $flick->sm_image = 'img/sm-penny.jpg';
        $flick->md_image = 'img/md-penny.jpg';
        $flick->year = '2016';
        $flick->age_limit = '16+';
        $flick->duration = '3 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Project Runway';
        $flick->description = "Aspiring fashion designers compete in challenges that test their ingenuity, reveal their personal aesthetics and determine who's in -- and who's out.";
        $flick->sm_image = 'img/sm-runway.jpg';
        $flick->md_image = 'img/md-runway.jpg';
        $flick->year = '2010';
        $flick->age_limit = '13+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Ratatouille';
        $flick->description = 'Growing up with a renowned chef as his idol, Remy the rat develops a taste for fine food. But his culinary ambitions only anger his practical father.';
        $flick->sm_image = 'img/sm-rat.jpg';
        $flick->md_image = 'img/md-rat.jpg';
        $flick->year = '2007';
        $flick->age_limit = '7+';
        $flick->duration = '1h 51m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Re:Mind';
        $flick->description = 'Eleven high school classmates awaken, restrained to a large dining room. While fearing for their lives, they question a motive to this bizarre act.';
        $flick->sm_image = 'img/sm-remind.jpg';
        $flick->md_image = 'img/md-remind.jpg';
        $flick->year = '2017';
        $flick->age_limit = '13+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Requiem';
        $flick->description = 'In the wake of a sudden tragedy, a London cellist unearths secrets that link her mother to the disappearance of a young girl in a small Welsh town.';
        $flick->sm_image = 'img/sm-requiem.jpg';
        $flick->md_image = 'img/md-requiem.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Riverdale';
        $flick->description = 'While navigating the troubled waters of sex, romance, school and family, teen Archie and his gang become entangled in a dark Riverdale mystery.';
        $flick->sm_image = 'img/sm-riverdale.jpg';
        $flick->md_image = 'img/md-riverdale.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Red Carpet';
        $flick->description = 'Dreaming of a box-office hit, an adult-movie director teams up with his crew of three misfits to lure a top actress into starring in his new film.';
        $flick->sm_image = 'img/sm-redcarpet.jpg';
        $flick->md_image = 'img/md-redcarpet.jpg';
        $flick->year = '2014';
        $flick->age_limit = '16+';
        $flick->duration = '1h 57m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Rotten';
        $flick->description = 'This docuseries travels deep into the heart of the food supply chain to reveal unsavory truths and expose hidden forces that shape what we eat.';
        $flick->sm_image = 'img/sm-rotten.jpg';
        $flick->md_image = 'img/md-rotten.jpg';
        $flick->year = '2018';
        $flick->age_limit = '13+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Santa Clarita Diet';
        $flick->description = "They're ordinary husband and wife realtors until she undergoes a dramatic change that sends them down a road of death and destruction. In a good way.";
        $flick->sm_image = 'img/sm-santa.jpg';
        $flick->md_image = 'img/md-santa.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Soul Eater';
        $flick->description = 'Maka and the other students at the Death Weapon Meister Academy must kill 99 evil humans and one witch, absorbing their spirits when they die.';
        $flick->sm_image = 'img/sm-souleater.jpg';
        $flick->md_image = 'img/md-souleater.jpg';
        $flick->year = '2009';
        $flick->age_limit = '16+';
        $flick->duration = '4 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Sherlock Holmes';
        $flick->description = "Robert Downey Jr. stars as the legendary sleuth Sherlock Holmes in this Guy Ritchie-helmed reinvention of Sir Arthur Conan Doyle's detective series.";
        $flick->sm_image = 'img/sm-sherlock.jpg';
        $flick->md_image = 'img/md-sherlock.jpg';
        $flick->year = '2009';
        $flick->age_limit = '16+';
        $flick->duration = '2h 8m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Shimmer Lake';
        $flick->description = 'Unfolding in reverse time, this darkly comic crime thriller follows a local sheriff hunting three bank robbery suspects, one of whom is his brother.';
        $flick->sm_image = 'img/sm-shimmer.jpg';
        $flick->md_image = 'img/md-shimmer.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 26m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Star Wars: Episode VII: The Force Awakens';
        $flick->description = 'As the renegade First Order searches for Luke Skywalker, a scavenger and an ex-stormtrooper join forces with a determined droid to find him first.';
        $flick->sm_image = 'img/sm-starwars.jpg';
        $flick->md_image = 'img/md-starwars.jpg';
        $flick->year = '2015';
        $flick->age_limit = '13+';
        $flick->duration = '2h 18m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Stranger Things';
        $flick->description = 'When a young boy vanishes, a small town uncovers a mystery involving secret experiments, terrifying supernatural forces and one strange little girl.';
        $flick->sm_image = 'img/sm-stranger.jpg';
        $flick->md_image = 'img/md-stranger.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Steel Rain';
        $flick->description = "Amid a coup, a North Korean agent escapes south with the country's injured leader in an attempt to keep him alive and prevent a Korean war.";
        $flick->sm_image = 'img/sm-steel.jpg';
        $flick->md_image = 'img/md-steel.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '2h 19m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Tabula Rasa';
        $flick->description = 'When a young woman with amnesia becomes a key figure in a missing persons case, she must reconstruct her memories to clear her name.';
        $flick->sm_image = 'img/sm-tabula.jpg';
        $flick->md_image = 'img/md-tabula.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Tangerine';
        $flick->description = 'Fresh out of a stint in jail, transgender prostitute Sin-Dee and her pal Alexandra hit the crazy streets of LA to get revenge on her fickle pimp.';
        $flick->sm_image = 'img/sm-tangerine.jpg';
        $flick->md_image = 'img/md-tangerine.jpg';
        $flick->year = '2015';
        $flick->age_limit = '16+';
        $flick->duration = '1h 27m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Avengers';
        $flick->description = 'An all-star lineup of superheroes -- including Iron Man, the Incredible Hulk and Captain America -- team up to save the world from certain doom.';
        $flick->sm_image = 'img/sm-theavengers.jpg';
        $flick->md_image = 'img/md-theavengers.jpg';
        $flick->year = '2012';
        $flick->age_limit = '13+';
        $flick->duration = '2h 24m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Canal';
        $flick->description = 'A film archivist sees footage revealing that his happy home was once the scene of a gruesome murder, which casts evil shadows upon his present life.';
        $flick->sm_image = 'img/sm-thecanal.jpg';
        $flick->md_image = 'img/md-thecanal.jpg';
        $flick->year = '2014';
        $flick->age_limit = '16+';
        $flick->duration = '1h 33m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Chase';
        $flick->description = 'After people in his town start turning up dead, a grumpy landlord is visited by a man who recounts an unsolved serial murder case from 30 years ago.';
        $flick->sm_image = 'img/sm-thechase.jpg';
        $flick->md_image = 'img/md-thechase.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 50m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Crown';
        $flick->description = "This drama follows the political rivalries and romance of Queen Elizabeth II's reign and the events that shaped the second half of the 20th century.";
        $flick->sm_image = 'img/sm-thecrown.jpg';
        $flick->md_image = 'img/md-thecrown.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '2 Seasons';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Do-Over';
        $flick->description = 'The life of a bank manager is turned upside down when a friend from his past manipulates him into faking his own death and taking off on an adventure.';
        $flick->sm_image = 'img/sm-thedoover.jpg';
        $flick->md_image = 'img/md-thedoover.jpg';
        $flick->year = '2016';
        $flick->age_limit = '16+';
        $flick->duration = '1h 48m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The End of the F***ing World';
        $flick->description = 'A budding teen psychopath and a rebel hungry for adventure embark on a star-crossed road trip in this darkly comic series based on a graphic novel.';
        $flick->sm_image = 'img/sm-theend.jpg';
        $flick->md_image = 'img/md-theend.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Garden of Words';
        $flick->description = 'When a lonely teenager skips his morning classes to sit in a lovely garden, he meets a mysterious older woman who shares his feelings of alienation.';
        $flick->sm_image = 'img/sm-thegarden.jpg';
        $flick->md_image = 'img/md-thegarden.jpg';
        $flick->year = '2013';
        $flick->age_limit = '7+';
        $flick->duration = '46m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Godfather';
        $flick->description = 'When an organized-crime family patriarch barely survives an attempt on his life, his youngest son steps in to take care of the would-be killers.';
        $flick->sm_image = 'img/sm-thegodfather.jpg';
        $flick->md_image = 'img/md-thegodfather.jpg';
        $flick->year = '1972';
        $flick->age_limit = '16+';
        $flick->duration = '2h 57m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Host';
        $flick->description = 'A mutant creature has developed from toxic chemical dumping. When the monster scoops up the daughter of a snack-bar owner, he races to save her.';
        $flick->sm_image = 'img/sm-thehost.jpg';
        $flick->md_image = 'img/md-thehost.jpg';
        $flick->year = '2006';
        $flick->age_limit = '16+';
        $flick->duration = '1h 59m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Hot Chick';
        $flick->description = "A cheerleader's shallowness gets her in trouble when she steals a cursed set of earrings and winds up trapped in the body of a 30-year-old male loser.";
        $flick->sm_image = 'img/sm-thehotchick.jpg';
        $flick->md_image = 'img/md-thehotchick.jpg';
        $flick->year = '2002';
        $flick->age_limit = '13+';
        $flick->duration = '1h 44m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Invitation';
        $flick->description = 'A man accepts an invitation to a dinner party hosted by his ex-wife, an unsettling affair that reopens old wounds and creates new tensions.';
        $flick->sm_image = 'img/sm-theinvitation.jpg';
        $flick->md_image = 'img/md-theinvitation.jpg';
        $flick->year = '2015';
        $flick->age_limit = '16+';
        $flick->duration = '1h 40m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Iron Fist';
        $flick->description = 'Danny Rand resurfaces 15 years after being presumed dead. Now, with the power of the Iron Fist, he seeks to reclaim his past and fulfill his destiny.';
        $flick->sm_image = 'img/sm-theironfist.jpg';
        $flick->md_image = 'img/md-theironfist.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Jungle Book';
        $flick->description = "Mowgli, who's been raised in the jungle by wolves, leaves home on an adventure guided by black panther Bagheera and friendly bear Baloo.";
        $flick->sm_image = 'img/sm-thejunglebook.jpg';
        $flick->md_image = 'img/md-thejunglebook.jpg';
        $flick->year = '2016';
        $flick->age_limit = '7+';
        $flick->duration = '1h 47m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Keepers';
        $flick->description = 'This docuseries examines the decades-old murder of Sister Catherine Cesnik and its suspected link to a priest accused of abuse.';
        $flick->sm_image = 'img/sm-thekeepers.jpg';
        $flick->md_image = 'img/md-thekeepers.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Lord of the Rings: The Fellowship of the Ring';
        $flick->description = 'From the idyllic shire of the Hobbits to the smoking chasms of Mordor, Frodo Baggins embarks on his epic quest to destroy the ring of Sauron.';
        $flick->sm_image = 'img/sm-thelotr.jpg';
        $flick->md_image = 'img/md-thelotr.jpg';
        $flick->year = '2001';
        $flick->age_limit = '13+';
        $flick->duration = '2h 58m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Proposal';
        $flick->description = "When an overbearing book editor learns she's in danger of losing her visa status and may be deported, she forces her put-upon assistant to marry her.";
        $flick->sm_image = 'img/sm-theproposal.jpg';
        $flick->md_image = 'img/md-theproposal.jpg';
        $flick->year = '2009';
        $flick->age_limit = '13+';
        $flick->duration = '1h 48m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'The Shining';
        $flick->description = 'Jack Torrance descends into madness -- terrorizing his wife and young son -- after living at a deserted and eerie hotel during its off season.';
        $flick->sm_image = 'img/sm-theshining.jpg';
        $flick->md_image = 'img/md-theshining.jpg';
        $flick->year = '1980';
        $flick->age_limit = '16+';
        $flick->duration = '1h 59m';
        $flick->save();


        $flick = new Flick();
        $flick->title = 'The Visit';
        $flick->description = "While on a visit to their grandparents' farm, two kids decide to make a film about their family but soon discover their old kin harbor dark secrets.";
        $flick->sm_image = 'img/sm-thevisit.jpg';
        $flick->md_image = 'img/md-thevisit.jpg';
        $flick->year = '2015';
        $flick->age_limit = '13+';
        $flick->duration = '1h 33m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'To the Bone';
        $flick->description = 'Ellen, a 20-year-old with anorexia nervosa, goes on a harrowing, sometimes funny journey of self-discovery at a group home run by an unusual doctor.';
        $flick->sm_image = 'img/sm-tothebone.jpg';
        $flick->md_image = 'img/md-tothebone.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 47m';
        $flick->save();

        $flick = new Flick();
        $flick->title = "Today's Special";
        $flick->description = "A haute cuisine chef dreams of cooking in Paris, but an emergency forces him to take over his family's shabby Indian restaurant in Queens.";
        $flick->sm_image = 'img/sm-today.jpg';
        $flick->md_image = 'img/md-today.jpg';
        $flick->year = '2009';
        $flick->age_limit = '16+';
        $flick->duration = '1h 38m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Ugly Delicious';
        $flick->description = "All the flavor. None of the BS. Star chef David Chang leads friends on a mouthwatering, cross-cultural hunt for the world's most satisfying grub.";
        $flick->sm_image = 'img/sm-ugly.jpg';
        $flick->md_image = 'img/md-ugly.jpg';
        $flick->year = '2018';
        $flick->age_limit = '16+';
        $flick->duration = '1 Season';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Veronica';
        $flick->description = 'In 1991 Madrid, after holding a séance at school, a teen girl minding her younger siblings at home suspects an evil force has entered their apartment.';
        $flick->sm_image = 'img/sm-vero.jpg';
        $flick->md_image = 'img/md-vero.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 45m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'Wedding Crashers';
        $flick->description = "Two buddies know how to use a woman's hopes and dreams for their own carnal gain. And their modus operandi? Crashing weddings.";
        $flick->sm_image = 'img/sm-wedding.jpg';
        $flick->md_image = 'img/md-wedding.jpg';
        $flick->year = '2005';
        $flick->age_limit = '16+';
        $flick->duration = '1h 59m';
        $flick->save();

        $flick = new Flick();
        $flick->title = 'XX';
        $flick->description = 'This four-part anthology of short horror films features stories that include some traditional themes but all are shown from a female point of view.';
        $flick->sm_image = 'img/sm-xx.jpg';
        $flick->md_image = 'img/md-xx.jpg';
        $flick->year = '2017';
        $flick->age_limit = '16+';
        $flick->duration = '1h 20m';
        $flick->save();

       	$flick = new Flick();
        $flick->title = 'You Again';
        $flick->description = "Before wedding bells toll, Marni must show her brother -- who's engaged to Marni's high school tormenter -- that a tiger doesn't change its stripes.";
        $flick->sm_image = 'img/sm-youagain.jpg';
        $flick->md_image = 'img/md-youagain.jpg';
        $flick->year = '2010';
        $flick->age_limit = '7+';
        $flick->duration = '1h 45m';
        $flick->save();

    }
}
