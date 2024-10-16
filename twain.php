<!DOCTYPE html>
<html lang="de">
   
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet" />
        <link href="./css/todo-style.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
        
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php
                require_once(__DIR__ . '/classes/Template.php');
                $template = new Template(__DIR__ . '/templates', []);
                echo $template->render('nav-side.php', ['pageTitle' => 'Todo']);
            ?>
            
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php
                    require_once(__DIR__ . '/classes/Template.php');
                    $template = new Template(__DIR__ . '/templates', []);
                    echo $template->render('nav-top.php');
                ?>
                
                
                <!-- Page content-->
                <br>
                <div class="row" id="top">
                    <div class="col-1"></div>
                    <div class="col-8">
                    <h2>Mark Twain</h2>
                    <h3>from <i>A Tramp Abroad</i></h3>

                    <p>A little learning makes the whole world kin.<br>
                    --Proverbs xxxii, 7. 

                    </p><p>I went often to look at the collection of curiosities in Heidelberg
                    Castle, and one day I surprised the keeper of it with my German.  I spoke
                    entirely in that language.  He was greatly interested; and after I had
                    talked a while he said my German was very rare, possibly a "unique"; and
                    wanted to add it to his museum. 

                    </p><h1>The Awful German Language</h1><p>If he had known what it had cost me to acquire my art, he would also
                    have known that it would break any collector to buy it.  Harris and I had
                    been hard at work on our German during several weeks at that time, and
                    although we had made good progress, it had been accomplished under great
                    difficulty and annoyance, for three of our teachers had died in the mean
                    time.  A person who has not studied German can form no idea of what a
                    perplexing language it is. 

                    </p><p>Surely there is not another language that is so slipshod and
                    systemless, and so slippery and elusive to the grasp.  One is washed about
                    in it, hither and thither, in the most helpless way; and when at last he
                    thinks he has captured a rule which offers firm ground to take a rest on
                    amid the general rage and turmoil of the ten parts of speech, he turns
                    over the page and reads, "Let the pupil make careful note of the following
                    EXCEPTIONS." He runs his eye down and finds that there are more exceptions
                    to the rule than instances of it.  So overboard he goes again, to hunt for
                    another Ararat and find another quicksand.  Such has been, and continues
                    to be, my experience.  Every time I think I have got one of these four
                    confusing "cases" where I am master of it, a seemingly insignificant
                    preposition intrudes itself into my sentence, clothed with an awful and
                    unsuspected power, and crumbles the ground from under me.  For instance,
                    my book inquires after a certain bird--(it is always inquiring after
                    things which are of no sort of no consequence to anybody): "Where is the
                    bird?" Now the answer to this question--according to the book--is that the
                    bird is waiting in the blacksmith shop on account of the rain.  Of course
                    no bird would do that, but then you must stick to the book.  Very well, I
                    begin to cipher out the German for that answer.  I begin at the wrong end,
                    necessarily, for that is the German idea.  I say to myself, "REGEN (rain)
                    is masculine--or maybe it is feminine--or possibly neuter--it is too much
                    trouble to look now.  Therefore, it is either DER (the) Regen, or DIE
                    (the) Regen, or DAS (the) Regen, according to which gender it may turn out
                    to be when I look.  In the interest of science, I will cipher it out on
                    the hypothesis that it is masculine.  Very well--then THE rain is DER
                    Regen, if it is simply in the quiescent state of being MENTIONED, without
                    enlargement or discussion--Nominative case; but if this rain is lying
                    around, in a kind of a general way on the ground, it is then definitely
                    located, it is DOING SOMETHING--that is, RESTING (which is one of the
                    German grammar's ideas of doing something), and this throws the rain into
                    the Dative case, and makes it DEM Regen.  However, this rain is not
                    resting, but is doing something ACTIVELY,--it is falling--to interfere
                    with the bird, likely--and this indicates MOVEMENT, which has the effect
                    of sliding it into the Accusative case and changing DEM Regen into DEN
                    Regen." Having completed the grammatical horoscope of this matter, I
                    answer up confidently and state in German that the bird is staying in the
                    blacksmith shop "wegen (on account of) DEN Regen." Then the teacher lets
                    me softly down with the remark that whenever the word "wegen" drops into a
                    sentence, it ALWAYS throws that subject into the GENITIVE case, regardless
                    of consequences--and therefore this bird stayed in the blacksmith shop
                    "wegen DES Regens."

                    </p><p>N.B.--I was informed, later, by a higher authority, that there was an
                    "exception" which permits one to say "wegen DEN Regen" in certain peculiar
                    and complex circumstances, but that this exception is not extended to
                    anything BUT rain. 

                    </p><p>There are ten parts of speech, and they are all troublesome.  An
                    average sentence, in a German newspaper, is a sublime and impressive
                    curiosity; it occupies a quarter of a column; it contains all the ten
                    parts of speech--not in regular order, but mixed; it is built mainly of
                    compound words constructed by the writer on the spot, and not to be found
                    in any dictionary--six or seven words compacted into one, without joint or
                    seam--that is, without hyphens; it treats of fourteen or fifteen different
                    subjects, each enclosed in a parenthesis of its own, with here and there
                    extra parentheses, making pens with pens: finally, all the parentheses and
                    reparentheses are massed together between a couple of king-parentheses,
                    one of which is placed in the first line of the majestic sentence and the
                    other in the middle of the last line of it--AFTER WHICH COMES THE VERB,
                    and you find out for the first time what the man has been talking about;
                    and after the verb--merely by way of ornament, as far as I can make
                    out--the writer shovels in "HABEN SIND GEWESEN GEHABT HAVEN GEWORDEN
                    SEIN," or words to that effect, and the monument is finished.  I suppose
                    that this closing hurrah is in the nature of the flourish to a man's
                    signature--not necessary, but pretty.  German books are easy enough to
                    read when you hold them before the looking-glass or stand on your head--so
                    as to reverse the construction--but I think that to learn to read and
                    understand a German newspaper is a thing which must always remain an
                    impossibility to a foreigner. 

                    </p><p>Yet even the German books are not entirely free from attacks of the
                    Parenthesis distemper--though they are usually so mild as to cover only a
                    few lines, and therefore when you at last get down to the verb it carries
                    some meaning to your mind because you are able to remember a good deal of
                    what has gone before.  Now here is a sentence from a popular and excellent
                    German novel--which a slight parenthesis in it.  I will make a perfectly
                    literal translation, and throw in the parenthesis-marks and some hyphens
                    for the assistance of the reader--though in the original there are no
                    parenthesis-marks or hyphens, and the reader is left to flounder through
                    to the remote verb the best way he can: 

                    </p><p>"But when he, upon the street, the (in-satin-and-silk-covered-
                    now-very-unconstrained-after-the-newest-fashioned-dressed) government
                    counselor's wife MET," etc., etc. <a href="#1">[1]</a>

                    </p><p>That is from THE OLD MAMSELLE'S SECRET, by Mrs. Marlitt.  And that
                    sentence is constructed upon the most approved German model.  You observe
                    how far that verb is from the reader's base of operations; well, in a
                    German newspaper they put their verb away over on the next page; and I
                    have heard that sometimes after stringing along the exciting preliminaries
                    and parentheses for a column or two, they get in a hurry and have to go to
                    press without getting to the verb at all.  Of course, then, the reader is
                    left in a very exhausted and ignorant state. 

                    </p><p>We have the Parenthesis disease in our literature, too; and one may see
                    cases of it every day in our books and newspapers: but with us it is the
                    mark and sign of an unpracticed writer or a cloudy intellect, whereas with
                    the Germans it is doubtless the mark and sign of a practiced pen and of
                    the presence of that sort of luminous intellectual fog which stands for
                    clearness among these people.  For surely it is NOT clearness--it
                    necessarily can't be clearness.  Even a jury would have penetration enough
                    to discover that.  A writer's ideas must be a good deal confused, a good
                    deal out of line and sequence, when he starts out to say that a man met a
                    counselor's wife in the street, and then right in the midst of this so
                    simple undertaking halts these approaching people and makes them stand
                    still until he jots down an inventory of the woman's dress.  That is
                    manifestly absurd.  It reminds a person of those dentists who secure your
                    instant and breathless interest in a tooth by taking a grip on it with the
                    forceps, and then stand there and drawl through a tedious anecdote before
                    they give the dreaded jerk.  Parentheses in literature and dentistry are
                    in bad taste. 

                    </p><p>The Germans have another kind of parenthesis, which they make by
                    splitting a verb in two and putting half of it at the beginning of an
                    exciting chapter and the OTHER HALF at the end of it.  Can any one
                    conceive of anything more confusing than that? These things are called
                    "separable verbs." The German grammar is blistered all over with separable
                    verbs; and the wider the two portions of one of them are spread apart, the
                    better the author of the crime is pleased with his performance.  A
                    favorite one is REISTE AB--which means departed.  Here is an example which
                    I culled from a novel and reduced to English: 

                    </p><p>"The trunks being now ready, he DE- after kissing his mother and
                    sisters, and once more pressing to his bosom his adored Gretchen, who,
                    dressed in simple white muslin, with a single tuberose in the ample folds
                    of her rich brown hair, had tottered feebly down the stairs, still pale
                    from the terror and excitement of the past evening, but longing to lay her
                    poor aching head yet once again upon the breast of him whom she loved more
                    dearly than life itself, PARTED."

                    </p><p>However, it is not well to dwell too much on the separable verbs.  One
                    is sure to lose his temper early; and if he sticks to the subject, and
                    will not be warned, it will at last either soften his brain or petrify it. 
                    Personal pronouns and adjectives are a fruitful nuisance in this language,
                    and should have been left out.  For instance, the same sound, SIE, means
                    YOU, and it means SHE, and it means HER, and it means IT, and it means
                    THEY, and it means THEM.  Think of the ragged poverty of a language which
                    has to make one word do the work of six--and a poor little weak thing of
                    only three letters at that.  But mainly, think of the exasperation of
                    never knowing which of these meanings the speaker is trying to convey. 
                    This explains why, whenever a person says SIE to me, I generally try to
                    kill him, if a stranger. 

                    </p><p>Now observe the Adjective.  Here was a case where simplicity would have
                    been an advantage; therefore, for no other reason, the inventor of this
                    language complicated it all he could.  When we wish to speak of our "good
                    friend or friends," in our enlightened tongue, we stick to the one form
                    and have no trouble or hard feeling about it; but with the German tongue
                    it is different.  When a German gets his hands on an adjective, he
                    declines it, and keeps on declining it until the common sense is all
                    declined out of it.  It is as bad as Latin.  He says, for instance: 

                    </p><p>SINGULAR

                    </p><p>Nominative--Mein gutER Freund, my good friend.<br> 
                    Genitives--MeinES GutEN FreundES, of my good friend. <br>
                    Dative--MeinEM gutEN Freund, to my good friend. <br>
                    Accusative--MeinEN gutEN Freund, my good friend. <br>

                    </p><p>PLURAL

                    </p><p>N.--MeinE gutEN FreundE, my good friends.  G.--MeinER gutEN
                    FreundE, of my good friends.  D.--MeinEN gutEN FreundEN,
                    to my good friends.  A.--MeinE gutEN FreundE, my good friends. 

                    </p><p>Now let the candidate for the asylum try to memorize
                    those variations, and see how soon he will be elected. 
                    One might better go without friends in Germany than take
                    all this trouble about them.  I have shown what a bother
                    it is to decline a good (male) friend; well this is
                    only a third of the work, for there is a variety of new
                    distortions of the adjective to be learned when the object
                    is feminine, and still another when the object is neuter. 
                    Now there are more adjectives in this language than there
                    are black cats in Switzerland, and they must all be as
                    elaborately declined as the examples above suggested. 
                    Difficult?--troublesome?--these words cannot describe it. 
                    I heard a Californian student in Heidelberg say, in one of
                    his calmest moods, that he would rather decline two drinks
                    than one German adjective. 

                    </p><p>The inventor of the language seems to have taken pleasure
                    in complicating it in every way he could think of. 
                    For instance, if one is casually referring to a house,
                    HAUS, or a horse, PFERD, or a dog, HUND, he spells these
                    words as I have indicated; but if he is referring to them
                    in the Dative case, he sticks on a foolish and unnecessary
                    E and spells them HAUSE, PFERDE, HUNDE.  So, as an added
                    E often signifies the plural, as the S does with us,
                    the new student is likely to go on for a month making
                    twins out of a Dative dog before he discovers his mistake;
                    and on the other hand, many a new student who could ill
                    afford loss, has bought and paid for two dogs and only
                    got one of them, because he ignorantly bought that dog
                    in the Dative singular when he really supposed he was
                    talking plural--which left the law on the seller's side,
                    of course, by the strict rules of grammar, and therefore
                    a suit for recovery could not lie. 

                    </p><p>In German, all the Nouns begin with a capital letter. 
                    Now that is a good idea; and a good idea, in this language,
                    is necessarily conspicuous from its lonesomeness.  I consider
                    this capitalizing of nouns a good idea, because by reason
                    of it you are almost always able to tell a noun the minute
                    you see it.  You fall into error occasionally, because you
                    mistake the name of a person for the name of a thing,
                    and waste a good deal of time trying to dig a meaning
                    out of it.  German names almost always do mean something,
                    and this helps to deceive the student.  I translated
                    a passage one day, which said that "the infuriated tigress
                    broke loose and utterly ate up the unfortunate fir forest"
                    (Tannenwald). When I was girding up my loins to doubt this,
                    I found out that Tannenwald in this instance was a
                    man's name. 

                    </p><p>Every noun has a gender, and there is no sense or system
                    in the distribution; so the gender of each must be
                    learned separately and by heart.  There is no other way. 
                    To do this one has to have a memory like a memorandum-book.
                    In German, a young lady has no sex, while a turnip has. 
                    Think what overwrought reverence that shows for the turnip,
                    and what callous disrespect for the girl.  See how it
                    looks in print--I translate this from a conversation
                    in one of the best of the German Sunday-school books:

                    </p><p>"Gretchen. Wilhelm, where is the turnip?

                    </p><p>"Wilhelm. She has gone to the kitchen. 

                    </p><p>"Gretchen. Where is the accomplished and beautiful English
                    maiden?

                    </p><p>Wilhelm.  It has gone to the opera."

                    </p><p>To continue with the German genders: a tree is male, its buds
                    are female, its leaves are neuter; horses are sexless,
                    dogs are male, cats are female--tomcats included, of course;
                    a person's mouth, neck, bosom, elbows, fingers, nails, feet,
                    and body are of the male sex, and his head is male
                    or neuter according to the word selected to signify it,
                    and NOT according to the sex of the individual who wears
                    it--for in Germany all the women either male heads or
                    sexless ones; a person's nose, lips, shoulders, breast,
                    hands, and toes are of the female sex; and his hair,
                    ears, eyes, chin, legs, knees, heart, and conscience
                    haven't any sex at all.  The inventor of the language
                    probably got what he knew about a conscience from hearsay. 

                    </p><p>Now, by the above dissection, the reader will see that in
                    Germany a man may THINK he is a man, but when he comes to look
                    into the matter closely, he is bound to have his doubts;
                    he finds that in sober truth he is a most ridiculous mixture;
                    and if he ends by trying to comfort himself with the
                    thought that he can at least depend on a third of this
                    mess as being manly and masculine, the humiliating second
                    thought will quickly remind him that in this respect
                    he is no better off than any woman or cow in the land. 

                    </p><p>In the German it is true that by some oversight of the inventor
                    of the language, a Woman is a female; but a Wife (Weib)
                    is not--which is unfortunate.  A Wife, here, has no sex;
                    she is neuter; so, according to the grammar, a fish
                    is HE, his scales are SHE, but a fishwife is neither. 
                    To describe a wife as sexless may be called under-description;
                    that is bad enough, but over-description is surely worse. 
                    A German speaks of an Englishman as the ENGLÄNDER; to change
                    the sex, he adds INN, and that stands for Englishwoman--
                    ENGLÄNDERINN. That seems descriptive enough, but still
                    it is not exact enough for a German; so he precedes the
                    word with that article which indicates that the creature
                    to follow is feminine, and writes it down thus: "die
                    Engländerinn,"--which means "the she-Englishwoman."
                    I consider that that person is over-described.

                </p><p>Well, after the student has learned the sex of a great
                number of nouns, he is still in a difficulty, because he
                finds it impossible to persuade his tongue to refer
                to things as "he" and "she," and "him" and "her," which
                it has been always accustomed to refer to it as "it."
                When he even frames a German sentence in his mind,
                with the hims and hers in the right places, and then works
                up his courage to the utterance-point, it is no use--
                the moment he begins to speak his tongue files the track
                and all those labored males and females come out as "its."
                And even when he is reading German to himself, he always
                calls those things "it," where as he ought to read in this way:

                </p><p>TALE OF THE FISHWIFE AND ITS SAD FATE <a href="#2">[2]</a>

                </p><p>It is a bleak Day.  Hear the Rain, how he pours, and the Hail,
                how he rattles; and see the Snow, how he drifts along,
                and of the Mud, how deep he is! Ah the poor Fishwife,
                it is stuck fast in the Mire; it has dropped its Basket
                of Fishes; and its Hands have been cut by the Scales
                as it seized some of the falling Creatures; and one Scale
                has even got into its Eye.  and it cannot get her out. 
                It opens its Mouth to cry for Help; but if any Sound comes
                out of him, alas he is drowned by the raging of the Storm. 
                And now a Tomcat has got one of the Fishes and she
                will surely escape with him.  No, she bites off a Fin,
                she holds her in her Mouth--will she swallow her? No,
                the Fishwife's brave Mother-dog deserts his Puppies and
                rescues the Fin--which he eats, himself, as his Reward. 
                O, horror, the Lightning has struck the Fish-basket;
                he sets him on Fire; see the Flame, how she licks the
                doomed Utensil with her red and angry Tongue; now she
                attacks the helpless Fishwife's Foot--she burns him up,
                all but the big Toe, and even SHE is partly consumed;
                and still she spreads, still she waves her fiery Tongues;
                she attacks the Fishwife's Leg and destroys IT; she attacks
                its Hand and destroys HER also; she attacks the Fishwife's Leg
                and destroys HER also; she attacks its Body and consumes HIM;
                she wreathes herself about its Heart and IT is consumed;
                next about its Breast, and in a Moment SHE is a Cinder;
                now she reaches its Neck--He goes; now its Chin--
                IT goes; now its Nose--SHE goes.  In another Moment,
                except Help come, the Fishwife will be no more. 
                Time presses--is there none to succor and save? Yes! Joy,
                joy, with flying Feet the she-Englishwoman comes! But alas,
                the generous she-Female is too late: where now is
                the fated Fishwife? It has ceased from its Sufferings,
                it has gone to a better Land; all that is left of it
                for its loved Ones to lament over, is this poor smoldering
                Ash-heap. Ah, woeful, woeful Ash-heap! Let us take him
                up tenderly, reverently, upon the lowly Shovel, and bear
                him to his long Rest, with the Prayer that when he rises
                again it will be a Realm where he will have one good square
                responsible Sex, and have it all to himself, instead of
                having a mangy lot of assorted Sexes scattered all over him
                in Spots. 

                </p><hr>

                <p>There, now, the reader can see for himself that this pronoun
                business is a very awkward thing for the unaccustomed tongue. 
                I suppose that in all languages the similarities of look
                and sound between words which have no similarity in meaning
                are a fruitful source of perplexity to the foreigner. 
                It is so in our tongue, and it is notably the case in
                the German.  Now there is that troublesome word VERMÄHLT:
                to me it has so close a resemblance--either real or
                fancied--to three or four other words, that I never know
                whether it means despised, painted, suspected, or married;
                until I look in the dictionary, and then I find it means
                the latter.  There are lots of such words and they are
                a great torment.  To increase the difficulty there are
                words which SEEM to resemble each other, and yet do not;
                but they make just as much trouble as if they did. 
                For instance, there is the word VERMIETHEN (to let,
                to lease, to hire); and the word VERHEIRATHEN (another way
                of saying to marry). I heard of an Englishman who knocked
                at a man's door in Heidelberg and proposed, in the best
                German he could command, to "verheirathen" that house. 
                Then there are some words which mean one thing when you
                emphasize the first syllable, but mean something very
                different if you throw the emphasis on the last syllable. 
                For instance, there is a word which means a runaway,
                or the act of glancing through a book, according to the
                placing of the emphasis; and another word which signifies
                to ASSOCIATE with a man, or to AVOID him, according to
                where you put the emphasis--and you can generally depend
                on putting it in the wrong place and getting into trouble. 

                </p><p>There are some exceedingly useful words in this language. 
                SCHLAG, for example; and ZUG.  There are three-quarters
                of a column of SCHLAGS in the dictonary, and a column
                and a half of ZUGS.  The word SCHLAG means Blow, Stroke,
                Dash, Hit, Shock, Clap, Slap, Time, Bar, Coin, Stamp, Kind,
                Sort, Manner, Way, Apoplexy, Wood-cutting, Enclosure,
                Field, Forest-clearing. This is its simple and EXACT
                meaning--that is to say, its restricted, its fettered meaning;
                but there are ways by which you can set it free,
                so that it can soar away, as on the wings of the morning,
                and never be at rest.  You can hang any word you please
                to its tail, and make it mean anything you want to. 
                You can begin with SCHLAG-ADER, which means artery,
                and you can hang on the whole dictionary, word by word,
                clear through the alphabet to SCHLAG-WASSER, which means
                bilge-water--and including SCHLAG-MUTTER, which means
                mother-in-law.

                </p><p>Just the same with ZUG.  Strictly speaking, ZUG means Pull,
                Tug, Draught, Procession, March, Progress, Flight, Direction,
                Expedition, Train, Caravan, Passage, Stroke, Touch, Line,
                Flourish, Trait of Character, Feature, Lineament, Chess-move,
                Organ-stop, Team, Whiff, Bias, Drawer, Propensity, Inhalation,
                Disposition: but that thing which it does NOT mean--when
                all its legitimate pennants have been hung on, has not been
                discovered yet. 

                </p><p>One cannot overestimate the usefulness of SCHLAG and ZUG. 
                Armed just with these two, and the word ALSO, what cannot
                the foreigner on German soil accomplish? The German word
                ALSO is the equivalent of the English phrase "You know,"
                and does not mean anything at all--in TALK, though it
                sometimes does in print.  Every time a German opens his
                mouth an ALSO falls out; and every time he shuts it he bites
                one in two that was trying to GET out. 

                </p><p>Now, the foreigner, equipped with these three noble words,
                is master of the situation.  Let him talk right along,
                fearlessly; let him pour his indifferent German forth,
                and when he lacks for a word, let him heave a SCHLAG into
                the vacuum; all the chances are that it fits it like a plug,
                but if it doesn't let him promptly heave a ZUG after it;
                the two together can hardly fail to bung the hole; but if,
                by a miracle, they SHOULD fail, let him simply say ALSO!
                and this will give him a moment's chance to think of the
                needful word.  In Germany, when you load your conversational
                gun it is always best to throw in a SCHLAG or two and a ZUG
                or two, because it doesn't make any difference how much
                the rest of the charge may scatter, you are bound to bag
                something with THEM.  Then you blandly say ALSO, and load
                up again.  Nothing gives such an air of grace and elegance
                and unconstraint to a German or an English conversation
                as to scatter it full of "Also's" or "You knows."

                </p><p>In my note-book I find this entry:

                </p><p>July 1.--In the hospital yesterday, a word of thirteen
                syllables was successfully removed from a patient--a
                North German from near Hamburg; but as most unfortunately
                the surgeons had opened him in the wrong place, under the
                impression that he contained a panorama, he died. 
                The sad event has cast a gloom over the whole community. 

                </p><p>That paragraph furnishes a text for a few remarks about
                one of the most curious and notable features of my
                subject--the length of German words.  Some German words
                are so long that they have a perspective.  Observe these
                examples:

                </p><p>Freundschaftsbezeigungen. 

                </p><p>Dilettantenaufdringlichkeiten. 

                </p><p>Stadtverordnetenversammlungen. 

                </p><p>These things are not words, they are alphabetical processions. 
                And they are not rare; one can open a German newspaper
                at any time and see them marching majestically across
                the page--and if he has any imagination he can see
                the banners and hear the music, too.  They impart
                a martial thrill to the meekest subject.  I take a
                great interest in these curiosities.  Whenever I come
                across a good one, I stuff it and put it in my museum. 
                In this way I have made quite a valuable collection. 
                When I get duplicates, I exchange with other collectors,
                and thus increase the variety of my stock.  Here rare
                some specimens which I lately bought at an auction sale
                of the effects of a bankrupt bric-a-brac hunter:

                </p><p>Generalstaatsverordnetenversammlungen. 

                </p><p>Alterthumswissenschaften. 

                </p><p>Kinderbewahrungsanstalten. 

                </p><p>Unabhaengigkeitserklaerungen. 

                </p><p>Wiedererstellungbestrebungen. 

                </p><p>Waffenstillstandsunterhandlungen. 

                </p><p>Of course when one of these grand mountain ranges goes
                stretching across the printed page, it adorns and ennobles
                that literary landscape--but at the same time it is a great
                distress to the new student, for it blocks up his way;
                he cannot crawl under it, or climb over it, or tunnel
                through it.  So he resorts to the dictionary for help,
                but there is no help there.  The dictionary must draw
                the line somewhere--so it leaves this sort of words out. 
                And it is right, because these long things are hardly
                legitimate words, but are rather combinations of words,
                and the inventor of them ought to have been killed. 
                They are compound words with the hyphens left out. 
                The various words used in building them are in the dictionary,
                but in a very scattered condition; so you can hunt
                the materials out, one by one, and get at the meaning
                at last, but it is a tedious and harassing business. 
                I have tried this process upon some of the above examples. 
                "Freundshaftsbezeigungen" seems to be "Friendship
                demonstrations,"
                which is only a foolish and clumsy way of saying "demonstrations
                of friendship." "Unabhaengigkeitserklaerungen" seems
                to be "Independencedeclarations," which is no improvement
                upon "Declarations of Independence," so far as I can see. 
                "Generalstaatsverordnetenversammlungen" seems to be
                "General-statesrepresentativesmeetings," as nearly as I
                can get at it--a mere rhythmical, gushy euphuism for
                "meetings of the legislature," I judge.  We used to have
                a good deal of this sort of crime in our literature,
                but it has gone out now.  We used to speak of a things as a
                "never-to-be-forgotten" circumstance, instead of cramping
                it into the simple and sufficient word "memorable" and then
                going calmly about our business as if nothing had happened. 
                In those days we were not content to embalm the thing
                and bury it decently, we wanted to build a monument over it. 

                </p><p>But in our newspapers the compounding-disease lingers
                a little to the present day, but with the hyphens left out,
                in the German fashion.  This is the shape it takes:
                instead of saying "Mr. Simmons, clerk of the county and
                district courts, was in town yesterday," the new form put
                it thus: "Clerk of the County and District Courts Simmons
                was in town yesterday." This saves neither time nor ink,
                and has an awkward sound besides.  One often sees a remark
                like this in our papers: "MRS. Assistant District Attorney
                Johnson returned to her city residence yesterday for the season."
                That is a case of really unjustifiable compounding;
                because it not only saves no time or trouble, but confers
                a title on Mrs. Johnson which she has no right to. 
                But these little instances are trifles indeed, contrasted
                with the ponderous and dismal German system of piling
                jumbled compounds together.  I wish to submit the following
                local item, from a Mannheim journal, by way of illustration:

                </p><p>"In the daybeforeyesterdayshortlyaftereleveno'clock Night,
                the inthistownstandingtavern called 'The Wagoner' was downburnt. 
                When the fire to the onthedownburninghouseresting Stork's
                Nest reached, flew the parent Storks away.  But when
                the bytheraging, firesurrounded Nest ITSELF caught Fire,
                straightway plunged the quickreturning Mother-Stork into
                the Flames and died, her Wings over her young ones outspread."

                </p><p>Even the cumbersome German construction is not able to
                take the pathos out of that picture--indeed, it somehow
                seems to strengthen it.  This item is dated away back
                yonder months ago.  I could have used it sooner, but I
                was waiting to hear from the Father-stork. I am still waiting. 

                </p><p>"ALSO!" If I had not shown that the German is a
                difficult language, I have at least intended to do so. 
                I have heard of an American student who was asked how he
                was getting along with his German, and who answered
                promptly: "I am not getting along at all.  I have worked
                at it hard for three level months, and all I have got
                to show for it is one solitary German phrase--'ZWEI GLAS'"
                (two glasses of beer). He paused for a moment, reflectively;
                then added with feeling: "But I've got that SOLID!"

                </p><p>And if I have not also shown that German is a harassing
                and infuriating study, my execution has been at fault,
                and not my intent.  I heard lately of a worn and sorely
                tried American student who used to fly to a certain German
                word for relief when he could bear up under his aggravations
                no longer--the only word whose sound was sweet and
                precious to his ear and healing to his lacerated spirit. 
                This was the word DAMIT.  It was only the SOUND that
                helped him, not the meaning; <a href="#3">[3]</a> and so, at last, when he
                learned that the emphasis was not on the first syllable,
                his only stay and support was gone, and he faded away
                and died. 

                </p><p>I think that a description of any loud, stirring,
                tumultuous episode must be tamer in German than in English. 
                Our descriptive words of this character have such
                a deep, strong, resonant sound, while their German
                equivalents do seem so thin and mild and energyless. 
                Boom, burst, crash, roar, storm, bellow, blow, thunder,
                explosion; howl, cry, shout, yell, groan; battle, hell. 
                These are magnificent words; the have a force and magnitude
                of sound befitting the things which they describe. 
                But their German equivalents would be ever so nice to sing
                the children to sleep with, or else my awe-inspiring ears
                were made for display and not for superior usefulness
                in analyzing sounds.  Would any man want to die in a
                battle which was called by so tame a term as a SCHLACHT?
                Or would not a comsumptive feel too much bundled up,
                who was about to go out, in a shirt-collar and a seal-ring,
                into a storm which the bird-song word GEWITTER was employed
                to describe? And observe the strongest of the several
                German equivalents for explosion--AUSBRUCH.  Our word
                Toothbrush is more powerful than that.  It seems to me
                that the Germans could do worse than import it into their
                language to describe particularly tremendous explosions with. 
                The German word for hell--Hölle--sounds more like HELLY
                than anything else; therefore, how necessary chipper,
                frivolous, and unimpressive it is.  If a man were told
                in German to go there, could he really rise to thee
                dignity of feeling insulted?

                </p><p>Having pointed out, in detail, the several vices of
                this language, I now come to the brief and pleasant task
                of pointing out its virtues.  The capitalizing of the nouns
                I have already mentioned.  But far before this virtue stands
                another--that of spelling a word according to the sound of it. 
                After one short lesson in the alphabet, the student can tell
                how any German word is pronounced without having to ask;
                whereas in our language if a student should inquire of us,
                "What does B, O, W, spell?" we should be obliged to reply,
                "Nobody can tell what it spells when you set if off by itself;
                you can only tell by referring to the context and finding
                out what it signifies--whether it is a thing to shoot
                arrows with, or a nod of one's head, or the forward end of a
                boat."

                </p><p>There are some German words which are singularly
                and powerfully effective.  For instance, those which
                describe lowly, peaceful, and affectionate home life;
                those which deal with love, in any and all forms,
                from mere kindly feeling and honest good will toward
                the passing stranger, clear up to courtship; those which
                deal with outdoor Nature, in its softest and loveliest
                aspects--with meadows and forests, and birds and flowers,
                the fragrance and sunshine of summer, and the moonlight
                of peaceful winter nights; in a word, those which deal with
                any and all forms of rest, respose, and peace; those also
                which deal with the creatures and marvels of fairyland;
                and lastly and chiefly, in those words which express pathos,
                is the language surpassingly rich and affective.  There are
                German songs which can make a stranger to the language cry. 
                That shows that the SOUND of the words is correct--it
                interprets the meanings with truth and with exactness;
                and so the ear is informed, and through the ear, the heart. 

                </p><p>The Germans do not seem to be afraid to repeat a word
                when it is the right one.  they repeat it several times,
                if they choose.  That is wise.  But in English, when we
                have used a word a couple of times in a paragraph,
                we imagine we are growing tautological, and so we are weak
                enough to exchange it for some other word which only
                approximates exactness, to escape what we wrongly fancy
                is a greater blemish.  Repetition may be bad, but surely
                inexactness is worse. 

                </p><hr>

                <p>There are people in the world who will take a great
                deal of trouble to point out the faults in a religion
                or a language, and then go blandly about their business
                without suggesting any remedy.  I am not that kind
                of person.  I have shown that the German language
                needs reforming.  Very well, I am ready to reform it. 
                At least I am ready to make the proper suggestions. 
                Such a course as this might be immodest in another; but I
                have devoted upward of nine full weeks, first and last,
                to a careful and critical study of this tongue, and thus
                have acquired a confidence in my ability to reform it
                which no mere superficial culture could have conferred
                upon me. 

                </p><p>In the first place, I would leave out the Dative case. 
                It confuses the plurals; and, besides, nobody ever knows
                when he is in the Dative case, except he discover it
                by accident--and then he does not know when or where it
                was that he got into it, or how long he has been in it,
                or how he is going to get out of it again.  The Dative case
                is but an ornamental folly--it is better to discard it. 

                </p><p>In the next place, I would move the Verb further up
                to the front.  You may load up with ever so good a Verb,
                but I notice that you never really bring down a subject
                with it at the present German range--you only cripple it. 
                So I insist that this important part of speech should be
                brought forward to a position where it may be easily seen
                with the naked eye. 

                </p><p>Thirdly, I would import some strong words from the English
                tongue--to swear with, and also to use in describing
                all sorts of vigorous things in a vigorous ways. <a href="#4">[4]</a>

                </p><p>Fourthly, I would reorganizes the sexes, and distribute
                them accordingly to the will of the creator.  This as
                a tribute of respect, if nothing else. 

                </p><p>Fifthly, I would do away with those great long
                compounded words; or require the speaker to deliver
                them in sections, with intermissions for refreshments. 
                To wholly do away with them would be best, for ideas are
                more easily received and digested when they come one at
                a time than when they come in bulk.  Intellectual food
                is like any other; it is pleasanter and more beneficial
                to take it with a spoon than with a shovel. 

                </p><p>Sixthly, I would require a speaker to stop when he is done,
                and not hang a string of those useless "haven sind gewesen
                gehabt haben geworden seins" to the end of his oration. 
                This sort of gewgaws undignify a speech, instead of adding
                a grace.  They are, therefore, an offense, and should
                be discarded. 

                </p><p>Seventhly, I would discard the Parenthesis.  Also the
                reparenthesis,
                the re-reparenthesis, and the re-re-re-re-re-reparentheses,
                and likewise the final wide-reaching all-enclosing
                king-parenthesis. I would require every individual,
                be he high or low, to unfold a plain straightforward tale,
                or else coil it and sit on it and hold his peace. 
                Infractions of this law should be punishable with death.
                
                </a></p><p>And eighthly, and last, I would retain ZUG and SCHLAG,
                with their pendants, and discard the rest of the vocabulary. 
                This would simplify the language. 

                </p><p>I have now named what I regard as the most necessary
                and important changes.  These are perhaps all I could
                be expected to name for nothing; but there are other
                suggestions which I can and will make in case my proposed
                application shall result in my being formally employed
                by the government in the work of reforming the language. 

                </p><p>My philological studies have satisfied me that a gifted person
                ought to learn English (barring spelling and pronouncing)
                in thirty hours, French in thirty days, and German
                in thirty years.  It seems manifest, then, that the
                latter tongue ought to be trimmed down and repaired. 
                If it is to remain as it is, it ought to be gently
                and reverently set aside among the dead languages,
                for only the dead have time to learn it. 

                </p><p>A FOURTH OF JULY ORATION IN THE GERMAN TONGUE, DELIVERED AT
                A BANQUET OF THE ANGLO-AMERICAN CLUB OF STUDENTS BY THE
                AUTHOR OF THIS BOOK

                </p><p>Gentlemen: Since I arrived, a month ago, in this
                old wonderland, this vast garden of Germany, my English
                tongue has so often proved a useless piece of baggage
                to me, and so troublesome to carry around, in a country
                where they haven't the checking system for luggage, that I
                finally set to work, and learned the German language. 
                Also! Es freut mich dass dies so ist, denn es muss,
                in ein haupts:achlich degree, h:oflich sein, dass man
                auf ein occasion like this, sein Rede in die Sprache des
                Landes worin he boards, aussprechen soll.  Daf:ur habe ich,
                aus reinische Verlegenheit--no, Vergangenheit--no, I
                mean Hoflichkeit--aus reinishe Hoflichkeit habe ich
                resolved to tackle this business in the German language,
                um Gottes willen! Also! Sie müssen so freundlich sein,
                und verzeih mich die interlarding von ein oder zwei
                Englischer Worte, hie und da, denn ich finde dass die
                deutsche is not a very copious language, and so when
                you've really got anything to say, you've got to draw
                on a language that can stand the strain. 

                </p><p>Wenn haber man kann nicht meinem Rede Verstehen, so werde
                ich ihm sp:ater dasselbe :ubersetz, wenn er solche Dienst
                verlangen wollen haben werden sollen sein h:atte. (I don't
                know what wollen haben werden sollen sein hätte means,
                but I notice they always put it at the end of a German
                sentence--merely for general literary gorgeousness,
                I suppose.)

                </p><p>This is a great and justly honored day--a day which is
                worthy of the veneration in which it is held by the true
                patriots of all climes and nationalities--a day which
                offers a fruitful theme for thought and speech; und meinem
                Freunde--no, meinEN FreundEN--meinES FreundES--well,
                take your choice, they're all the same price; I don't
                know which one is right--also! ich habe gehabt haben
                worden gewesen sein, as Goethe says in his Paradise
                Lost--ich--ich--that is to say--ich--but let us change cars.

                NOTES
        
                <p><a name=1>1.  Wenn er aber auf der Strasse der in Sammt und Seide
                geh&uuml;llten jetz sehr ungenirt nach der neusten mode
                gekleideten Regierungsrathin begegnet.
        
                <p><a name=2>2.  I capitalize the nouns, in the German (and ancient
                English) fashion.
        
        
                <p><a name=3>3.  It merely means, in its general sense, "herewith."

                </p><p><a name="4">4.  "Verdammt," and its variations and enlargements, are words
                which have plenty of meaning, but the SOUNDS are so mild and
                ineffectual that German ladies can use them without sin.  German
                ladies who could not be induced to commit a sin by any persuasion
                or compulsion, promptly rip out one of these harmless little
                words when they tear their dresses or don't like the soup.  It
                sounds about as wicked as our "My gracious." German ladies are
                constantly saying, "Ach! Gott!" "Mein Gott!" "Gott in Himmel!"
                "Herr Gott" "Der Herr Jesus!" etc.  They think our ladies have
                the same custom, perhaps; for I once heard a gentle and lovely
                old German lady say to a sweet young American girl: "The two
                languages are so alike--how pleasant that is; we say 'Ach! Gott!'
                you say 'Goddamn.'"
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a href="#top">Back to Top</a>
                

                 


                        
                </div>
            </div>
                    
            
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    </body>

</html>