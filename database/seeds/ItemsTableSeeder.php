<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     ['id' => 1, "name" => 'Aberfeldy',
        //     "image" => 'gambarGAUSAHDIGANTI.jpg', "description" => "lorem ipsum",
        //     "stock" => 8, 'cluster_id' => 3, 'body' => 2, 'sweetness' => 2, 'spicy' => 1],
        //     ['id' => 1, "name" => 'Aberfeldy',
        //     "image" => 'gambarGAUSAHDIGANTI.jpg', "description" => "lorem ipsum",
        //     "stock" => 8, 'cluster_id' => 3, 'body' => 2, 'sweetness' => 2, 'spicy' => 1],
        //     // ['id' => 1, "name" => 'Minuman pertama',
        //     // "image" => 'gambarPertama.jpg', "description" => "ini deskripsi minuman pertama",
        //     // "stock" => 4, 'cluster_id' => 2],
        //     // ['id' => 2, "name" => 'Minuman kedua',
        //     // "image" => 'gambarKedua.jpg', "description" => "ini deskripsi minuman kedua",
        //     // "stock" => 7, 'cluster_id' => 1],
        //     // ['id' => 3, "name" => 'Minuman ketiga',
        //     // "image" => 'gambarketiga.jpg', "description" => "ini deskripsi minuman ketiga",
        //     // "stock" => 1, 'cluster_id' => 1],
        //     // ['id' => 4, "name" => 'Minuman keempat',
        //     // "image" => 'gambarkeempat.jpg', "description" => "ini deskripsi minuman keempat",
        //     // "stock" => 8, 'cluster_id' => 3],
        // ];

        $nameArray = [
            'Aberfeldy','Aberlour','AnCnoc','Ardbeg','Ardmore','ArranIsleOf','Auchentoshan','Auchroisk','Aultmore',
            'Balblair','Balmenach','Belvenie','BenNevis','Benriach','Benrinnes','Benromach','Bladnoch','BlairAthol','Bowmore',
            'Bruichladdich','Bunnahabhain','Caol Ila','Cardhu','Clynelish','Craigallechie','Craigganmore','Dailuaine','Dalmore','Dalwhinnie','Deanston','Dufftown','Edradour','GlenDeveronMacduff','GlenElgin','GlenGarioch','GlenGrant','GlenKeith','GlenMoray','GlenOrd','GlenScotia','GlenSpey','Glenallachie','Glendronach','Glendullan','Glenfarclas','Glenfiddich','Glengoyne','Glenkinchie','Glenlivet','Glenlossie','Glenmorangie','Glenrothes','Glenturret','Highland Park','Inchgower','Isle of Jura','Knochando','Lagavulin','Laphroig','Linkwood','Loch Lomond','Longmorn','Macallan','Mannochmore','Miltonduff','Mortlach','Oban','OldFettercairn','OldPulteney','RoyalBrackla','RoyalLochnagar','Scapa','Speyburn','Speyside','Springbank','Strathisla','Strathmill','Talisker','Tamdhu','Tamnavulin','Teaninich','Tobermory','Tomatin','Tomintoul','Tormore','Tullibardine',
        ];

        $sweetnessArray = [
            2,3,3,1,2,3,2,3,2,3,3,2,2,2,2,2,2,2,2,1,2,1,3,2,2,3,2,2,2,2,3,3,3,3,1,2,3,2,2,2,3,3,2,2,4,3,2,2,3,2,2,3,3,2,3,1,3,1,2,3,1,2,3,1,4,2,2,2,1,3,2,2,4,2,2,2,3,2,2,3,2,1,3,3,2,3,
        ];

        $spicyArray = [
            1,3,0,2,1,1,1,1,0,2,1,2,2,2,1,2,1,2,2,2,1,2,1,2,2,1,2,2,1,1,0,1,1,1,3,0,2,2,2,0,1,1,1,1,2,0,1,2,2,2,2,1,2,1,2,1,2,1,0,1,1,1,1,1,0,3,2,2,1,2,2,1,1,0,2,2,2,3,0,2,2,0,2,2,0,2,
        ];

        $maltyArray = [
            2,3,2,2,3,1,2,2,2,1,0,2,2,2,3,2,2,2,1,2,2,1,2,1,2,2,2,2,2,3,2,2,2,1,2,1,1,2,2,2,2,2,2,2,3,2,2,2,2,2,1,2,2,2,2,1,1,1,1,1,2,3,2,1,1,1,2,3,2,2,2,2,2,2,1,3,1,2,2,1,0,2,2,2,1,2,
        ];
        $clusterArray = [
            1,1,3,2,1,3,3,1,3,3,1,1,1,3,1,1,3,1,1,1,3,2,3,2,4,3,1,1,3,1,3,1,4,3,1,3,3,3,1,3,3,3,1,1,1,3,3,3,1,3,3,1,1,1,3,2,1,2,2,3,3,1,1,3,3,1,2,4,4,4,1,1,3,3,1,1,3,2,3,3,3,3,1,3,3,4,
        ];

        // $description = [
        //     'deksripsi aberfeldy',
        //     'deksripsinya whis',
        // ];

        $description = [
            'A fruity, clean and polished malt with a touch of honey and spice, Aberfeldy 12 Year Old is an excellent introduction to this Highland distillery. Aberfeldys main claim to fame is as the heart of the excellent Dewars blend but whiskies like this are putting it firmly in the spotlight.',
'All our single malts are made with the best local ingredients of barley and soft water from nearby mountain, Ben Rinnes. Our expertly crafted new spirit is usually matured for a minimum of 12 years both in the finest hand-picked Oloroso Sherry butts and American Oak barrels. It’s this double cask maturation which subtly brings together the characteristics of each cask to create a truly rich and rewardingly complex range of single malts.',
'Highland single malt scotch whisky anCnoc is a rather curious whisky. You see, this fine single malt is created using traditional production methods. Its just that we use them to make a refreshingly modern whisky (something thats reflected in our contemporary bottle design and packaging today).',
'As a replacement for the much-loved 1990 Airigh nam Beist, Ardbeg Corryvreckan had some pretty big shoes to fill, but the good news is that this is a belter, winning Worlds Best Single Malt Whisky at the World Whisky Awards 2010 and Best No Age Statement Scotch from Jim Murrays Whisky Bible.',
'Ardmore distillery is a single malt Scotch whisky distillery, located in the village of Kennethmont, Aberdeenshire. ... Ardmore Traditional Cask was the distillerys single malt. It was bottled at 46% ABV, in bottles embossed with an image of a golden eagle.',
'The initial rush of rich vanilla sweetness gives way to a touch of cinnamon which adds a spicy edge to the soft and sweet texture. The classic Arran citrus notes have rounded with age and reveal new depths of character against a background of sweet oak.',
'This Auchentoshan 12-year-old expression replaced the old 10 year-old when the range was totally revamped. Elegant and refined, with those classic Auchentoshan notes of vanilla and almonds.',
'Made in 2007 at Auchriosk distillery, this Speyside single malt was matured in a single cask for 11 years, before being bottled in August 2018 by indie bottler Mossburn for its Vintage Casks series.',
'Part of Dewars The Last Great Malts range launched in 2014, this 12-year-old Aultmore is the first release from the distillery for a few years and is elegant, light and fruity.',
'The 2005 vintage of Balblair is a light, fruity and refreshing dram thats typical of the Highland distillerys style. Matured in casks that previously held bourbon, this single malt has notes of toffee and vanilla alongside orchard citrus and ground spice.',
'Rich and fruity whisky from Balmenach, bottled after long ageing as part of the, appropriately titled, Old & Rare range by Hunter Laing. This takes the distillerys classic Speyside character and amplifies it, layering rich, winter fruit with peppery spice and fresh citrus.',
'A 14-year-old limited-edition Balvenie which finished its maturation in casks which had previously held Caribbean rum. Expect vanilla and toffee notes as the rum contributes extra sweetness to the flavours.',
'Made at Ben Nevis distillery, this 23-year-old single malt from That Boutique-y Whisky Company has been matured in a single cask, before being bottled in 2019. Aromas of cereals, candied lemon peel, raspberry liquorice and dried fruits compliment notes of raisins, sultanas, garden herbs and biscuits that fill the palate.',
'The very first batch of Benriachs Peated Cask Strength series has been matured in a combination of oloroso-sherry and bourbon casks. Warming and toasty with notes of sweet toffee apples, nectarines, tablet and heather smoke.',
'A 1997 Benrinnes single malt, matured in a single cask for 21 years before being bottled by Daily Drams in 2019, as part of its The Nectar of The Daily Drams.',
'Very few malts can stand anything like as much ageing as this Benromach has managed. Which makes it all the more amazing that the whisky inside the bottle can still seem so fresh. Of course, over fifty-five years, the angels get to take more than their fair share - only eighty-three bottles were yielded from the cask - but what remains is a fantastic concentration of flavour and an almost eerie youthfulness.',
'Celebrating the 200th anniversary of Bladnochs foundation, this is a richly sherried 29 Year Old whisky that spent its last 18 months of maturation in Moscatel casks. It was formed from a marriage of two casks, both distilled in 1988, and has notes of sherry, acacia, sweet oak, citrus and dark chocolate.Each of the 200 bottles released comes in a special presentation case and is crowned with a gold stopper designed by the distillerys Australian owner David Prior.',
'The Rare Malts are a now-discontinued series of cask-strength releases designed by Diageo to showcase some of the hidden treasures in their portfolio. This is a fine cask-strength malt from a great, though little-known, Highland distillery.',
'Originally exclusive to travel retail, this 18 Year Old Bowmore is, as the name suggests, a deep and complex Islay single malt. Matured in oloroso and Pedro Ximénez sherry casks, it has rich notes of chocolate, peat-smoke roasted coffee, orange peel and treacle toffee.',
'The very last 22 casks from 1985 have been used to create this fantastic edition of Bruichladdichs single malt. The casks were rediscovered in 2012 by then master distiller Jim McEwan, who filled their spirit into fresh bourbon barrels for added depth and complexity. In 2017 the whisky was again rehomed, this time into French oak which had previously held claret from a prestigious chateau. This three month period imbued the bourbon-aged whisky with an extra layer of fruit and sweet notes, as well as a subtle blush colour.',
'A limited-edition 1988 Bunnahabhain single malt that has been finished in a quartet of ex-Marsala hogsheads for three years before being bottled in January 2019. Rich oaky aromas fill the nose, alongside sweet fruit, Marsala, honeyed nuts, berries, floral heather and candied fruit that are echoed in the palate.',
'Made in 2001 at Caol Ila distillery, this Islay single malt was matured in a single American oak hogshead until being bottled in April 2019 for Gordon & MacPhails Connoisseurs Choice series. Subtle, smoky aromas of fresh citrus, green apple and creamy vanilla fill the nose, and the palate offers notes of bonfire smoke, bright citrus and crunchy apples.',
'A bottling of 1973 vintage Cardhu released as part of Diageos Rare Malts range around the turn of the millenium. A 27 year old dram bottled at a fairly fierce 60.02% ABV.',
'Part of Diageos Special Releases 2015. A blend of four different ages, this Clynelish has that trademark rich waxiness, along with refreshing green apple, lemon and grapefruit notes and a creamy mouthfeel.',
'Well-aged whisky from Craigellachie, combining the distillerys famously heavy character with elegant orchard fruit and sherry-cask spice. A worth.',
'The Cragganmore entry in Diageos Distillers Edition series is one of the more unusual – it is finished in port pipes for extra sweetness and fruity depth. This is the 2005 vintage, bottled in 2017.',
'A tropical-tinger, golden dram from Dailuaine, distilled in 1973 and bottled at an impressive 46 years old by Hunter Laing from the companys oldest stocks of whisky for the Old & Rare range. While Dailuaine is more often for its weighty character, this whisky shows off the fruitier and more tropical side of the distillery, with fresh fruit carefully balanced against riper and richer fruit, and oaky spice. Complex and layered with flavour, it never loses its well-aged elegance.',
'A favourite expression in the Dalmore stable, this 15-year-old is elegant and smooth, with lipsmacking texture and the flawless balance one would expect from blending maestro Richard Paterson.',
'The 1996 vintage of Dalwhinnie Distillers Edition. Each distillerys DE is finished in a different wood – Dalwhinnies uses oloroso sherry casks, resulting in an added layer of rich fruit.',
'A no-age-statement whisky from Deanston bottled at 46.3%. This one is made up of young whisky which is decanted into new American oak casks for its final stages of maturation.',
'A gentle but complex whisky from Dufftown in the heart of Speyside – maybe the most important town in Scottish distilling. This 1975-vintage whisky was bottled at 44 years old by Hunter Laing for the Old & Rare range, and the years have allowed the spirit to become mellow and easy-drinking with loads of character. Orchard and citrus fruit are balanced by soft sweetness and lingering oaky spice – a dram to savour.',
'Presented in an elegant Ibisco decanter, this 2005 Edradour 13 Year Old is a single-cask whisky that has been matured for 13 years in oloroso sherry casks and bottled at cask strength. It has rich, sweet and fruity notes on the palate alongside gentle, honeyed cinnamon spice.',
'A 1980s distillery bottling of Glen Deveron with a screw cap, produced for the Italian market.',
'Glen Elgin 12yo is a top-quality malt, highly sought-after for blends. This is a little-seen single malt expression that represents great value for money.',
'Introduced to Glen Gariochs standard range in late 2010, this 12yo is a mix of ex-bourbon and sherry casks, and like the other distillery bottlings since the revamp, has been bottled at a feisty 48%. A real charmer.',
'Very reliable quality Speyside from a distillery founded in 1840. Glen Grant is one of the worlds best-selling single malts and is particularly popular in Italy. A huge 95 points from Jim Murrays Whisky Bible 2013, along with the title of Single Malt of the Year (10yo & Under).',
'The first official bottling from the re-opened Glen Keith distillery in Speyside, which was revived in 2013 and whose spirits normally appear in blends such as Chivas Regal and 100 Pipers. This new, no-age-statement whisky is a gentle dram with notes of poached pears, honeycomb and vanilla toffee.',
'A 2006 Glen Moray single malt from the distillerys Cask Project series, matured in ex-Madeira casks for 13 years, before being bottled. Aromas of baked apple, pear, honey and soft spices fill the nose, complemented by notes of sultana, baking spices, brown sugar and cinnamon-baked apples.',
'A cask-strength Singleton of Glen Ord, matured in freshly-charred American oak hogsheads for 18 years, before being bottled as part of Diageos 2019 Special Releases. Delicate aromas of ripe apricots, raspberry jam, candied peel and cinnamon rolls mingle with chocolate-covered cherries, peach, sponge cake and barley sugar on the nose. The palate offers notes of apricot frangipane, baking spices, orange peel, dark chocolate, mint and oak spice.',
'Glen Scotia Double Cask starts its life in first-fill bourbon barrels, before being finished in Pedro-Ximenez-sherry casks. Notes of spicy fruit and vanilla.',
'The only official bottling from Glen Spey, with most of the whisky going into J&B blends.',
'A miniature of 15-year-old Glenallachie single malt, matured in a combination of Pedro Ximenez and oloroso sherry casks, creating a smooth, rich character. Aromas of raisins, butterscotch and sweet spices fill the nose, and the palate offers notes of dark chocolate, orange peel, banana, raisins and caramel.',
'A dense, heavily-sherried dram from a distillery now producing again after a six-year layoff. A malt best suited to after-dinner sipping.',
'The ancestral home of House Tully, Riverrun, sits at the junction of the Red Fork of the Trident and the Tumblestone River. The ruling Lord of the Riverlands, House Tully embodies the power and ferocity of the rivers it sits between. Using the power found in their positioning, House Tully forged strong alliances and built a history of honour, family and duty. Built along the banks of the River Fiddich, Glendullan Distillery originally relied on the waters it lay beside, using a water wheel to power the entire distillery. Like the Tullys themselves, this single malt can benefit from a splash of water, opening up flavours of green apple, honey and sweet vanilla.',
'Glenfarclas 10yo is a straw-gold , delicately light, sweet and malty dram leaving a long slightly spicy finish. Always impeccably well-made, this is a whisky that always delivers in quality.',
'A small 20cl bottle of Glenfiddichs flagship 12 year old whisky - as of 2011 the largest selling single malt whisky in the world.',
'Batch 007 of Glengoynes Cask Strength series is a sweet, malty single malt, and is the first in the collection to be matured in ex-bourbon barrels as well as ex-sherry casks. The palate offers notes of cinnamon, orange, peach and honey.',
'Replacing the 10 year-old as the main expression of the Lowland style in the Classic Malts range, this Glenkinchie 12yo is a bit fuller and more complex.',
'The opening salvo of the Glenlivet range, named in honour of the distillerys founder, George Smith. Its classic Glenlivet, with a creamy and fruity character bolstered by the use of first-fill American oak to mature some of the whisky.',
'A well-balanced whisky from Glenlossie, one of Speysides hidden gems. This 1975-vintage dram was matured for 44 years before being bottled by Hunter Lang for the Old & Rare range. Its a fruity whisky, with tropical and ripe orchard fruit notes running through from the nose into the palate, before picking up a touch of nuttiness in the finish.',
'The original sets a high standard for Highland whisky, and has gone from strength to strength since its slightly controversial packaging redesign a few years ago. Medium-bodied and gently warming, with pleasant spicy notes.',
'A great whisky for those looking to try Glenrothes for the first time. This sweet, zesty dram has a yellow label that denotes the colour of the grape at the point it is plucked from the vine.',
'The replacement for the old 12yo as the distillerys standard bottling, Glenturret 10yo has a deliciously rich, fruity character. You can see why Famous Grouse is so successful with Glenturret as its backbone.',
'Highland Park 12 Year Old remains one of the gold- standard malts for other distillery bottlings to aspire to. With a delicious sweetness (heather-honey is their preferred description) and a warming, silky mouthfeel, this is a whisky that never lets you down. The greatest all-rounder in the world of malt whisky. Michael Jackson, Michael Jacksons Malt Whisky Companion',
'The first entry in Diageos Special Releases for northern Speysider Inchgower, part of the 2018 edition of the range. Aged for 8 years in refill American-oak hogsheads, this is a great example of the distillerys fruity and salty spirit – its by the coast and the distillers swear the sea gives the spirit its salty tang.',
'Elixir is a 10-year-old whisky from Jura distillery. Finished in a combination of American white oak and European sherry casks, this is complex with notes of pineapple, toffee and spice.',
'Formerly carrying a vintage, Knockandos ongoing bourbon-cask bottling has now been released as a 12 year old. Light and fruity with spicy hints.',
'A 20cl bottle of Lagavulin 16 year old. Arguably the most pungent in terms of pure peat of all the Islay whiskies, it is rich and complex.',
'A smoky, complex bourbon barrel matured whisky from Laphroaig, this is the 12th edition of the Islay distillerys ever-popular Cask Strength 10 Year Old single malt. Bottled in February 2020, aromas of sweet biscuits, smoked cedar and Manuka honey mingle with pipe tobacco, old leather, candle wax and hints on vanilla on the nose. The palate offers notes of burnt oak, barbecued marshmallow, toffee, sea salt and Belgian caramel waffles, as well as roasted coffee beans, sticky toffee pudding and white pepper, wrapped in waves of peat smoke.',
'A 1980s bottle of Linkwood 12yo with a decorative woodcut illustration of a castle on the label.',
'A 1980s bottle of Linkwood 12yo with a decorative woodcut illustration of a castle on the label.',
'A bottling of Longmorn from Connoisseurs Choice featuring their old skool black label. Distilled in 1955, when the distillery was still an independent with its own floor maltings, and bottled 24 years later.',
'An incredible collectors bottling from Macallan, the third in a range of royal bottlings, with only 1953 sets produced. This set celebrates Queen Elizabeth IIs coronation in 1953, 60 years before the release, and comprises two sherry cask matured whiskies - one from American oak, one from Spanish. This gives a pair of very different looking whiskies, one golden and one deep mahogany, each labelled with a different iconic image of The Queen: The American oak with Cecil Beatons famed coronation portrait and the Spanish oak with a 2004 image by Julian Calder.',
'Made at Mannochmore distillery in 2008, this Speyside single malt has been matured in a single cask for 10 years, before being bottled in December 2018 for indie bottler Mossburns Vintage Casks series.',
'A 1994 Miltonduff single malt from Douglas Laings Xtra Old Particular range, matured in a single refill hogshead for a quarter of a century, before being bottled in 2019.',
'The opening entry in the super-premium Mortlach range, combining bourbon- and sherry-matured whisky to create a spicy, rich and flavoursome dram that shows off the distillerys excellent spirit.',
'The brothers of the Night’s Watch take an oath and pledge their lives to protect the Seven Kingdoms and guard them from the terrors that lie beyond the ancient barrier of ice, The Wall, from their base at Castle Black. There lies a frozen wasteland which, legend has it, is inhabited by giants, wildlings and the Night King and his army of White Walkers who bring with them the long night. Just like Castle Black, Oban Distillery sits at the foot of a steep cliff that overlooks the bay, the frontier between the West Highlands and the Islands of Scotland. The richness of the whisky is balanced with a woody, spicy dryness that would keep even the Night’s Watch warm in winter.',
'An old bottling of Old Fettercairn 10 year old. Founded in 1824, the name Old Fettercairn was in use up until then owners Whyte & Mackay were taken into new ownership themselves in 2001/2. We estimate this bottle dates from the 1980s.',
'An intriguing Old Pulteney thats part of the revamped range for 2018. This non-age-statement single malt has been finished in barrels that previously held peated whisky, giving it mellow smoke notes alongside the classic Pulteney character.',
'Royal Brackla was the first distillery to be allowed to use the Royal title, and 2015 saw it get its own range of single malts. Part of the Last Great Malts series, the 16 Year Old is finished in first-fill oloroso sherry casks and is sweet and spicy, with a hint of smoke in the mix, too.',
'A favourite of Queen Victoria and Prince Albert, being conveniently situated close by Balmoral Castle. Royal Lochnagar was originally a key ingredient in VAT 69, but most production is now for single malts.',
'Scapa Skiren is a 2015 release from the Orkney distillery. Aged in first-fill American oak casks, this is creamy and sweet with notes of tropical fruit and heather.',
'A celebratory release from Speyburn to commemorate the 18th anniversary of Bobby Anderson’s position as distillery manager. This single malt, aged for 18 years in American and Spanish oak casks, has aromas of toffee and sugared almonds, as well as tropical fruits on the nose. The palate holds flavours of rich dark chocolate, toffee and a touch of citrus, with plenty of smoke throughout. The finish is long and smoky, with a sweeter honeyed edge.',
'A very special Glenfarclas 1958, bottled by Signatory at forty years old in 1998 as the jewel in the crown for their tenth anniversary celebrations. Less than 500 decanters were produced from a single sherry butt. An incredible 95.59 points in Whiskybase.',
'A very special release from Springbank distillery. At 50 years old, this whisky is amongst the oldest releases from the distillery. Origially sold as part of the Millennium set, which included whiskies at 25, 30, 35, 40, 45, and 50 years old.',
'An independent bottling of 8 year old Strathisla by Gordon & Macphail. We think this was bottled in the 1980s.',
'This 25 year old Strathmill – the first appearance of the distillery in the Special Releases range – is the lightest in style of this years line-up. Aged in refill American oak, its sweet and creamy with the distillerys trademark grassiness.',
'An easy-drinking Talisker, taking the distillerys classically rugged character and softening it out, while maintaining the smoky and sweet notes the distillery is known for. More approachable, but still definitely Talisker.',
'Distilled on 2 November 1963 and bottled after more than 50 years in a first-fill sherry butt, this is the oldest ever release from Tamdhu. With just 100 bottles made, this is a rare chance to own a piece of history.',
'A very old distillery bottling of sherried Tamnavulin 20yo, produced for the Italian market at some stage in the 1980s, when they were still using the -Glenlivet suffix.',
'Released during the distillery’s 200th year, this Highland single malt was distilled before Teaninich underwent significant expansion. Reflecting its older style of production, the whisky makes an excellent aperitif or a partner to Asian cuisine. Initially sweet and zesty, this dram layers herbal notes under its toffee, lemon and apple flavours.',
'Matured exclusively in ex-bourbon casks, Tobermory 12 Year. Launched in 2019, Tobermory 12 Year Old takes centre-stage in the new core range from the distillery. After a two year hiatus as the distillery underwent extensive refurbishments, Tobermory has introduced new bottlings, inspired by the colours of the Isle of Mull. Old has a vibrant, fruity and spicy character with a subtle, salty edge. This Hebridean single malt has sweet, honeyed aromas of vanilla, ripe oranges and delicate flowers. The palate offers notes of fresh citrus, apples and tropical fruits, followed by creamy toffee, floral honey and a subtly, salty undercurrent.',
'A limited-edition single malt from Tomatin, matured in a collection of 21 casks laid down over the last five decades, including casks that previously held Scotch whisky, bourbon and sherry, as well as re-charred French oak casks. Aromas of sweet pastry, wood shavings, cooked fruit and floral coconut fill the nose. The palate offers notes of Christmas cask, male syrup, red berries, tropical fruits and wax.',
'This 21-year-old Tomintoul boasts a floral, fruity, spicy character. This will gladden the hearts of fans of mature easy-drinking Speyside whiskies that dont cost the earth.',
'A darkly-flavoured, sherry-matured whisky from Tormore bottled by Hunter Laing for the Old & Rare range. This was distilled in 1988 and matured for 31 years in a single oloroso sherry butt, giving it a rich character run through with spice, nuts and dark chocolate, as well as more fragrant notes of tobacco and fruit.',
'A very rare old 1980s distillery bottling of 5 year old Tullibardine. We estimate this bottle dates from the 1980s.',



        ];



        // foreach($data as $d){
        //     DB::table('items')->insert([
        //         'id' => $d['id'],
        //         'name' => $d['name'],
        //         'image' => $d['image'],
        //         'description' => $d['description'],
        //         'stock' => $d['stock'],
        //         'cluster_id' => $d['cluster_id']
        //     ]);
        // }


        $faker = Faker::create();
        for($i=0;$i<86;$i++){
            $plusSatu = $i+1;
            // dd($nameArray[$i]);
            DB::table('items')->insert([
                'id' => $i+1,
                'name' => $nameArray[$i],
                'image' => $plusSatu.".png",
                'description' => $description[$i],
                'stock' => rand($min=5,$max=100),
                'sweetness' => $sweetnessArray[$i],
                'spicy' => $spicyArray[$i],
                'malty' => $maltyArray[$i],
                'cluster_id' => $clusterArray[$i],
                'price' => $faker->numberBetween($min=10,$max=100)
            ]);
        }
    }
}
