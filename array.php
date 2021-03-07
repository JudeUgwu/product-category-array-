<?php

$categories = 
[
  "categories"=>[
    "type"=>"store-category",
    "form"=>"select",
    "store_list"=>[
      [
        "id"=>"0",
        "title"=>"Agriculture and Food",
        "image"=>"agricultureandfoods.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Farm Machinery and Equipments",
              "elements"=>[
                [
                "id"=>"0",
                "type"=>"advert-type",
                "title"=>"type",
                "form"=>"select",
                "options"=>["Bell Drinks","Cages","Corn Flakes Machine","Egg Incubator","Milling Machine","Power Trillers","Rice Destoner","Shellers","Others"]
                ],
                [
                "id"=>"1",
                "type"=>"advert-condition",
                "title"=>"condition",
                "form"=>"select",
                "options"=>["Brand New","Used","Sellers Refurbised","Manufacturers Refurbished","For Parts or Not Working"]
                ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Feeds,Supplements and Seeds"
            ],
            [
              "id"=>"2",
              "title"=>"Livestock and Poultry",
              "elements"=>[
              [
                "id"=>"0",
                "type"=>"advert-type",
                "title"=>"type",
                "form"=>"select",
                "options"=>["Cane Rats","Chickens","Chinchillas","Cows","Ducks","Geese","Goats","Guinea Fowls","Pigs","Rabbits","Roosters","Sheeps","Turkey","Others"]
              ],
              [
                "id"=>"1",
                "type"=>"advert-quantity",
                "title"=>"quantity",
                "form"=>"input"
              ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Meals and Drinks",
              "elements"=>[
              [
                "id"=>"0",
                "type"=>"advert-type",
                "title"=>"type",
                "form"=>"select",
                "options"=>[
                    0=>"Alcoholic Drink",
                    1=>"Bakery Product",
                    2=>"Diary Products",
                    3=>"Eggs",
                    4=>"Fruits",
                    5=>"Grains",
                    6=>"Groceries",
                    7=>"Fish",
                    8=>"Hot Drinks",
                    9=>"Juices",
                    10=>"Meat Products",
                    11=>"Ready Meals",
                    12=>"Soft Drinks",
                    13=>"Sauces",
                    14=>"Snacks",
                    15=>"Spices",
                    16=>"Sweeties",
                    17=>"Vegetables",
                    18=>"Others"
                ],
                "sources"=>[
                  "advert-subtype"=>[
                      0=>["absinthe","beer","biiter","brandy","champagne","cider","cognac","gin","liqueur","rum","sambuca","tequila","vodka","whiskey","wine"],
                    1=>["bread","biscuit","bagel","brownie","cake","cookie","cracker","croissant","muffin","pie","torte"],
                    2=>["butter","cheese","ice cream","milk","sour cream","whey","yogurt"],
                    3=>["chicken eggs","quail eggs"],
                    4=>["apple","avokado","cherry","banana","grape","kiwi","lemon","lime","mango","melon","nectarine","papaya","pear","peach","pineapple","plum","orange","strawberry","watermelon"],
                    5=>["amaranth","barley","beans","buckwhat","bulgur","corn","couscous","millet","quinoa","oak","rice","rye","wheat"],
                    6=>["Breakfast Cereal","Canned Fish","Canned Meat","Caviar","Flour","Honey","Jelly and Desserts","Pasta","Soda","Vegetable Oil"],
                    7=>["dried fish","fresh fish","smoked fish"],
                    8=>["coffee","cocoa","tea"],
                    9=>["mutivitamin juice","apple juice","carrot juice","cherry juice","grape juice","lemon juice","lime juice","orange juice","pineapple juice","strawberry juice","tomato juice"],
                    10=>["Raw meat","sausages","smoked meat"],
                    11=>["first meals","second meals","desserts"],
                    12=>["7 UP","Coca-Cola","Dr Pepper","Fanta","Orangeade","Pepsi","sprite","shwepps","sparkling water","water"],
                    13=>["brown sauces","butter sauces","fish sauces","green sauces","mayonnaise","sweet sauces","tartar","tomato sauces","white sauces"],
                    14=>["chips","dried fruit","crackers","fish snacks","flakes","granola","meat snacks","nuts","popcorn","seeds"],
                    15=>["allspice","anise","black cumin","black pepper","caraway seed","cardamom","carom (ajwain)","cassia bark","cayenne","celery seed","chili pepper","cinnamon","clove","coriander seed","crushed red pepper","cumin","curry powder","fennel","fenugreek","galangal root powder","garlic","ginger","mace","mustard seed","nutmeg","onion powder","paprika","poppy seeds","pumpkin spice","rosemary","saffron","salt","star anise","sugar","sumac","thyme","tumeric","white pepper"],
                    16=>["chocolate and Candies","chewing gum","jelly beans","syrups and toppings","zephyr"],
                    17=>["beans","beetroot","broccoli","cabbage","carrot","cassava","cauliflower","celery","cucumber","eggplant","garlic","leek","lettuce","onion","pumpkin","parsnip","pea","pepper","potato","radish","spinach","tomato","turnip","yam"]
                  ]
                ]
              ],
              [
                "id"=>"1",
                "type"=>"advert-subtype",
                "title"=>"subtype",
                "source_id"=>"0",
                "form"=>"select",
                "options"=>[]
              ]
              ]
            ]
          ]
        ]
      ],
      [
        "id"=>"1",
        "title"=>"Animals and Pets",
        "image"=>"animalsandpets.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Birds",
              "elements"=>[
              [
                "id"=>"0",
                "type"=>"advert-gender",
                "title"=>"gender",
                "form"=>"select",
                "options"=>["male","female"]
              ],
              [
                "id"=>"1",
                "type"=>"advert-type",
                "title"=>"type",
                "form"=>"select",
                "options"=>["canary","crow","eagle","falcon","finch","ostrich","owl","parrot","pigeon","peacock","sparrow"]
              ],
              [
                "id"=>"2",
                "type"=>"advert-age",
                "title"=>"age",
                "form"=>"select",
                "options"=>["adult","baby","senior","young"]
              ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Cats and Kittens",
              "elements"=>[
              [
                "id"=>"0",
                "type"=>"advert-gender",
                "title"=>"gender",
                "form"=>"select",
                "options"=>["male","female"]
              ],
              [
                "id"=>"1",
                "type"=>"advert-breed",
                "title"=>"breed",
                "form"=>"select",
                "options"=>["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","bengal","birman","bombay","british shorthair","burmese","burmilla","chartreux","chinese li hua","colorpoint shorthair","cornish rex","cymric","devon rex","egyptian mau","european burmese","exotic","havana brown","himalayan","japanese bobtail","javanese","korat","laperm","maine coon","manx","nebelung","norwegian forest","ocicat","oriental","persian","ragamuffin","ragdoll","russian blue","savannah","scottish fold","selkirk rex","siamese","siberian","singapura","snowshoe","somali","sphynx","tonkinese","turkish angora","turkish van","others"]
              ],
              [
                "id"=>"2",
                "type"=>"advert-breedtype",
                "title"=>"breed type",
                "form"=>"select",
                "options"=>["mixed breed","purebred"]
              ],
              [
                "id"=>"3",
                "type"=>"advert-age",
                "title"=>"age",
                "form"=>"select",
                "options"=>["0-1 month","1-3 month","3-6 month","6-12 month","1+ year"]
              ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Dogs and Puppies",
              "elements"=>[
              [
                "id"=>"0",
                "type"=>"advert-gender",
                "title"=>"gender",
                "form"=>"select",
                "options"=>["male","female"]
              ],
              [
                "id"=>"1",
                "type"=>"advert-breed",
                "title"=>"breed",
                "form"=>"select",
                "options"=>[
                    "affenpinscher","afghan hound","airedale terrier","akita","alaskan malamute","american english coonhound","american eskimo","american foxhound","american pit bull terrier","american water spaniel","anatolian shepherd","appenzeller sennenhunde","australian cattle","australian  shepherd","australian terrier","azawakh","barbet","basenji","basset hound","beagle","bearded collie","bedlington terrier","belgian malinois","belgian sheepdog","belgian tervuren","berger picard","berbese mountain","bichon frise","black and tan coonhound","black russian terrier","bloodhound","bluetick coonhound","bolognese","border collie","boerboel","border terrier","borzoi","boston terrier","bouvier des flandres","boxer","boykin spaniel","bracco italiano","briard","brittany","brussels giffon","bull terrier","bulldog","bullmastiff","cairn terrier","canaan","cane corso","cardigan welsh corgi","catahoula leopard","cavaliar king charles spaniel","cesky terrier","chesapeake bay retriever","chihuahua","caucasian shepherd","chinese crested","chinook","chow chow","clumber spaniel","cockapoo","cocker spaniel","collie","coton de tulear","curly-coated retriever","dachshund","dandie dinmont terrier","doberman pinscher","dogue de bordeaux","english cocker spaniel","english foxhound","english setter","english springer spaniel","english toy spaniel","entlebucher mountain","field spaniel","finnish lapphund","finnish spitz","flat-coated retriever","fox terrier","french bulldog","german pinscher","german shepherd","german shorthaired pointer","german wirehaired pointer","giant schnauzer","glen of imaal terrier","goldador","golden retriever","goldendoodle","gorden setter","great dane","great pyrenees","greater swiss mountain","greyhound","harrier","havanese","ibizan hound","icelandic sheepdog","irish red and white setter","irish setter","irish terrier","irish water spaniel","irish wolfhound","italian greyhound","jack russell terrier","japanese chin","japanese spitz","keeshond","kerry blue terrier","komondor","kooikerhondje","korean jindo","kuvasz","labrdoodle","labrador retriever","lakeland terrier","lancashire heeler","leonberger","lhasa apso","lowchen","maltese","maltese shih tzu","maltipoo","manchester terrier","mastiff","miniature pinscher","miniature schnauzer","mutt","mongrel (no breed)","neapolitan mastiff","newfoundland","norfolk terrier","norwegian buhund","norwegian elkhound","norwegian lunderhund","norwich terrier","nova scotia duck trolling retriever","old english sheepdog","otterhound","papillon","peekapoo","pekingese","pembroke welsh corgi","petit basset griffon vendeen","pharaoh hound","plott","pocket beagle","pointer","polish lowland sheepdog","pomeranian","poodle","portuguese water","pug","puggle","puli","pyrenean shepherd","rat terrier","redbone coonhound","rhodesian ridgeback","rottweiler","saint bernard","saluki","samoyed","schipperke","schnoodle","scottish deerhound","scottish terrier","sealyham terrier","shetland sheepdog","shiba inu","shih tzu","siberian husky","silky terrier","skye terrier","sloughi","small  munsterlander pointer",
                  "soft coated wheaten terrier","stabyhoun","staffordshire bull terrier","standard schnauzer",
                  "sussex spaniel","swedish vallhund","tibetan mastiff","tibetan spaniel","tibetan terrier",
                  "toy fox terrier","treeing tennessee brindle","treeing walker coonhound","vizsla","weimaraner",
                  "welsh springer spaniel","welsh terrier","west highland white terrier",
                  "whippet","wirehaired poining griffon","xoloitzcuintli","yorkipoo","yorkshire terrier","other"
                ]
              ],
              [
                "id"=>"2",
                "type"=>"advert-breedtype",
                "title"=>"breed type",
                "form"=>"select",
                "options"=>["mixed breed","purebred"]
              ],
              [
                "id"=>"3",
                "type"=>"advert-age",
                "title"=>"age",
                "form"=>"select",
                "options"=>["0-1 month","1-3 month","3-6 month","6-12 month","1+ year"]
              ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Fish",
              "elements"=>[]
            ],
            [
              "id"=>"4",
              "title"=>"Other Animals",
              "elements"=>[]
            ],
            [
              "id"=>"5",
              "title"=>"Pet's Accessories",
              "elements"=>[
              [
                "id"=>"0",
                "type"=>"advert-type",
                "title"=>"type",
                "form"=>"select",
                "options"=>["Poultry Cages","Dogs and Cats Food","Cages","Dogs and Cats Houses","Fish Feed","Other"]
              ],
              [
                "id"=>"0",
                "type"=>"advert-condition",
                "title"=>"condition",
                "form"=>"select",
                "options"=>["Brand New","Used"]
              ]
              ]
            ],
            [
              "id"=>"6",
              "title"=>"Reptiles",
              "elements"=>[]
            ]
          ]
        ]
      ],
      [
        "id"=>"2",
        "title"=>"Babies and Kids",
        "image"=>"babiesandkids.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Babies and Kids Accessories",
              "elements"=>[
              [
                "id"=>"0",
                "type"=>"advert-type",
                "title"=>"type",
                "form"=>"select",
                "options"=>["bags","belts","bow ties","bracelets","headbands","hair clips","hair hair ribbons","lunch boxes","necklaces","rings","sunglasses","teethers","umbrellas","others"]
              ],
              [
                "id"=>"1",
                "type"=>"advert-condition",
                "title"=>"condition",
                "form"=>"select",
                "options"=>["brand new","used"]
              ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Baby and Child Care",
              "elements"=>[
              [
                "id"=>"0",
                "type"=>"advert-type",
                "title"=>"type",
                "form"=>"select",
                "options"=>["Baby shift sets","baby grooming kits","baby manicure sets","baby oil","baby powder","baby spoons","bath accessories","bath tub","bather","bed sheets","bibs","blankets and throws","bottle drying racks","bottle sterilizers and warmers","bubble baths","cutlery sets","diaper bags","diapers","diaper covers","duvets","food","feeding bottles","lotion","milk powder dispensers","nappy cream","nappy sacks","nasal aspirators","nipple brushes","nipples","pacifiers","pillows","plates","potty training","shampoo","shawls","shower caps","sippy cups","soap","starter sets","sterilising tablets","straw cups","thermometers","toothbrushes","toothpaste","towels","training pants","washcloths","water bottles","wipes","other"]
              ],
              [
                "id"=>"1",
                "type"=>"advert-condition",
                "title"=>"condition",
                "form"=>"select",
                "options"=>["brand new","used"]
              ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"children's clothing",
              "elements"=>[
                [
                "id"=>"0",
                "title"=>"gender",
                "type"=>"advert-gender",
                "form"=>"select",
                "options"=>["girls","boys","unisex"]
                ],
                [
                "id"=>"1",
                "title"=>"type",
                "type"=>"advert-type",
                "form"=>"select",
                "options"=>["ball gowns","boardshorts","boxers","blazers","ballet dresses","blouses","beanies","bodysuits","costumes","caps","cardigans","christening","clothing sets","coats","crayon dress","dresses","dungarees","hoodie","jeans","jackets","jerseys","jumpsuits","jeggings","leggings","nightware","overalls","polo shirts","pants","prom dresses","panties","pantyhose","rompers","school uniforms","shirts","shrugs","skinny jeans","swimsuits","skirts","suits","shorts","singlets","sweaters","swimwears","socks","tracksuits","trousers","t-shirts","tops","underwear","vests","others"]
                ],
                [
                "id"=>"2",
                "title"=>"color",
                "type"=>"advert-color",
                "form"=>"select",
                "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                "id"=>"3",
                "titile"=>"age",
                "type"=>"advert-age",
                "form"=>"multiselect",
                "options"=>["0-3m","3-6m","6-9m","9-12m","12-18","2-3y","3-5y","6-9y","10-16y"]
                ],
                [
                "id"=>"4",
                "type"=>"advert-condition",
                "title"=>"condition",
                "form"=>"select",
                "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Children's Furniture",
              "elements"=>[
                [
                  "id"=>"0",
                  "title"=>"type",
                  "type"=>"advert-type",
                  "form"=>"select",
                  "options"=>["beds","boxes","cabinets","chairs","cots","drawers","mattresse","tables","other"]
                ],
                [
                  "id"=>"2",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"4",
              "title"=>"Children's Gear and Saftey",
              "elements"=>[
                [
                  "id"=>"0",
                  "title"=>"type",
                  "type"=>"advert-type",
                  "form"=>"select",
                  "options"=>["baby monitors","bouncers","car seats","carriers","mosquito nets","playpens","swings","walkers","other"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"5",
              "title"=>"Childrens Shoe",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["girls","boys","unisex"]
                ],
                [
                  "id"=>"1",
                  "title"=>"type",
                  "type"=>"advert-type",
                  "form"=>"select",
                  "options"=>["baby shoes","ballet flats","booties","boots","clogs","crib","flats shoes","football shoes","flip flops","hi top sneakers","loafers","moccasins","sandals","school shoes","slip-on","slippers","sneakers","tennis shoes"]
                ],
                [
                  "id"=>"2",
                  "titile"=>"size",
                  "type"=>"advert-size",
                  "form"=>"multiselect",
                  "options"=>["16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35"]
                ],
                [
                  "id"=>"3",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-upper-material",
                  "title"=>"upper material",
                  "form"=>"multiselect",
                  "options"=>["cotton","canvas","faux leather","leather","nylon","pvc","rubber","suede","velour","velvet","other"]
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-outside-material",
                  "title"=>"outside material",
                  "form"=>"multiselect",
                  "options"=>["eva","pu","pvc","rubber","thermo plastic rubber"]
                ],
                [
                  "id"=>"7",
                  "type"=>"advert-fastening",
                  "title"=>"fastening",
                  "form"=>"multiselect",
                  "options"=>["buckles","buttons","hook and eye","laces","snap fasteners","toggles","velcro","zippers"]
                ]
              ]
            ],
            [
              "id"=>"6",
              "title"=>"Maternity and Pregnancy",
              "elements" => [
                [
                  [
                    "id"=>"0",
                    "title"=>"type",
                    "type"=>"advert-type",
                    "form"=>"select",
                    "options"=>["breast pumps","breast pad","dresses","nursing pillows","nursing bras","nursing covers","support belts","tops","trousers","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ],
                ]
              ]
            ],
            [
              "id"=>"7",
              "title"=>"Prams and Strollers",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["britax","bugaboo","bumbleride","chicco","college","combi","contours","evenflo","gracco","icandy","inglesina","instep","jeep","kolcraft","maclaren","maxi-cosi","mountain buggy","mutsy","orbit baby","peg perego","quinny","schwinn","stokke","valco","other brand"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-stroller-type",
                  "title"=>"stroller type",
                  "form"=>"select",
                  "options"=>["joggers","lightweight","standard","transformable","travel system","tandem"]
                ],
                [
                  "id"=>"2",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"3",
                  "title"=>"capacity",
                  "type"=>"advert-capacity",
                  "form"=>"select",
                  "options"=>["single","double","triple","quad"]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"8",
              "title"=>"toys",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["boys","girls","unisex"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["basketball hoops","bikes","bubble toys","buses","bouncing castles","balls","building blocks","balloons","baby play mats","cot mobiles","cars","dolls","drones","educational toys","frisbees","guitars","fidget spinners","kids drums","musical toys","microphones","laptops","playhouses","playground equipment","pretend play","puzzles","plush toys","pianos","play tunnels","rockers","rattles","robots","rubik cube","scooters","slides","tricycles","trains","trucks","water guns","other"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-age",
                  "title"=>"age",
                  "form"=>"select",
                  "options"=>["Birth-24 months","2-4 years","5-7 years","8-13 years","14 years and up"]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ]
          ]
        ]
      ],
      [
        "id"=>"3",
        "title"=>"Commercial Equipment and Tools",
        "image"=>"commercialequipmentandtools.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"industrial ovens",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["curing","baking","batch"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-power-source",
                    "title"=>"power source",
                    "form"=>"select",
                    "options"=>["electric","gas"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-no-of-trays",
                    "title"=>"no of trays",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-voltage",
                    "title"=>"voltage",
                    "si_unit"=>"v",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-max-temperature",
                    "title"=>"max temperature",
                    "si_unit"=>"c",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"5",
                    "type"=>"advert-shape",
                    "title"=>"shape",
                    "form"=>"select",
                    "options"=>["horizontal","vertical"]
                  ],
                  [
                    "id"=>"6",
                    "type"=>"advert-weight",
                    "title"=>"weight",
                    "si_unit"=>"kg",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"7",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used","refurbished"]
                  ]
                  
              ]
            ],
            [
              "id"=>"1",
              "title"=>"manufacturing equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>[
                      "bottle making machines","brick making machine","capping machines","cnc router machines","coding machines","commercial air pumps","concrete batch plants","concrete block machines","containers","distribution boards","feed mills","feeder pillars","forming machines","greese guns","grinding machines","grinding mill","hoists","industrial blowers","industrial extractor fans","industrial irons","laminating machine","LPG Pumps","motors","palm oil mills","panel saws","packaging machine","punching machines","pure water machine","reverse osimosis system","rotary pumps","sealing machine","shrink wrapping machines","soap cutter","soap making machines","steam machines","switchgear","water treatment plant","workbenches","other"
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"manufacturing materials",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"medical equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>[
                    "ambulance strenchers","crutches","hospital equipments","lab coats","mammography machines","medical gloves","microscopes","oscilloscopes","oxygen concentrators","sterilizers","stethoscopes","surgical masks","ultrasound machine","uv sterilizers","wheel chairs","x-ray machines","other"
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"4",
              "title"=>"printing equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["3d printers","ceramic printers","heat presses","industrial printers","plastic card printers","plotters","other"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"5",
              "title"=>"resturant and catering equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-weight",
                  "title"=>"weight",
                  "si_unit"=>"kg",
                  "form"=>"input",
                  "options"=>[]
                ]
              ]
            ],
            [
              "id"=>"6",
              "title"=>"safety equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"7",
              "title"=>"salon equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"8",
              "title"=>"stage lighting and effect",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"9",
              "title"=>"stationery",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["binders","calculators","calendars","copy and printer paper","document racks","dry erase boards","file folders","glue","markers","notepads","paper cutters","pen holders","pencils","pens","shredders","staplers","stickers","other"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ],
            [
              "id"=>"10",
              "title"=>"store equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]
                ]
              ]
            ]
          ]
        ]
      ],
      [
        "id"=>"4",
        "title"=>"Electronics",
        "image"=>"electronics.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Accessories and Supplies for Electronics",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>[
                    0=>"audio and music accessories",
                    1=>"game consoles accessories",
                    2=>"headphones accessories",
                    3=>"networking product accessories",
                    4=>"photo and video accessories",
                    5=>"printer  and scanners accessories",
                    6=>"security an surveillance accessories",
                    7=>"smart video accessories",
                    8=>"tv and DVD Accessories"
                  ],
                  "sources"=>[
                    "advert-subtype"=>[
                      0=>["acoustic sound insulation","boom poles","cables","cases","covers and bags","stands","other"],
                      1=>["adapter","cables","cameras","cases","charges","charges","kinect sensors","memory cards","other"],
                      2=>["cases and bags","ear pads","ear hooks","stands and hangers","other"],
                      3=>["antennas","adapters","cables","other"],
                      4=>["adapters","backgrounds","batteries and chargers","battery grips","bnc connectors","cables","cases and bags","DSLR shoulder rigs","flash trigger","lenses","light gels","light stands","memory cards","photo reflectors","photo speedlite","sand bags","splitters","stabilizers","straps","studio lighting","tripod","video converters","other"],
                      5=>["adapter","cleaning kit","digital printer ink","ink cartridges","ink pumps","laser toners","pickup rollers","printing blades","toner cartridges","other"],
                      6=>["adapters","CCTV Cables","testers","wall mounts","other"],
                      7=>["bands","brand buttons","cases","charge cables","charger dock","screen protectors","wireless charges","others"],
                      8=>["adapters","antennas","cables","ceiling mounts","chromecast","guard prodectors","projector stand","remote controls","remote control holders","satelite dishes","wall mounts","other"]
                    ]
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-subtype",
                  "title"=>"subtype",
                  "source_id"=>"0",
                  "form"=>"select",
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>[
                    "alctron","alfa","altura","amazon","apc","aputure","astel","ays","babson","baseus","beastgrip","benq","blackmagicdesign","blitzwolf","blue bell","bnc","brother","canon","century","chupez","cisco","coleman","commscope","cotv","crown","d-link","datavideo","dell","djl","dobe","double power","dp","dstv","dw","dymo","eagle","earldom","eastbuy","evoils","evolve","fangpusm","feiyutech","flycam","fresnel","fugetek","fujifilm","gold print","goldcolor","gotv","godox","havit","hid","hikvision","hitachi","hp","huawei","i-series","idobol","iguard","ike","infocus","irig","jaguar","jet tec","jieyang","jmary","joway","jvc","kico","kingjoy","ksmart","kwese","ldnio","lexar","lg","logitech","magewell","manos","meike","mercury","micnova","micrologix","microsoft","mini","moza","nec","neewer","nest","nikon","nintendo","nm print","oculus","olympus","oraimo","osmo","panasonic","philips","plantronics","platinum","polystar","porodo","powerbot","print-klex","puluz","remax","ricoh","ril inks","rocketfish","rokinon","ronin-m","samsung","samyang","satechi","sevenoak","sharp","shouyong","sigma","smaat","sonik","sony","sp","spectra","sutefoto","tamron","tefeg","televes","tokina","toshiba","tp-link","transcend","travor","ucom","ulanzi","ustine","viltrox","vima","vintage","visico","weifeng","wo new","xiami","yoga","yongnuo","yunfeng","yunteng","zhiyun-tech","zomie","other"
                  ]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["Brand New","Used","Sellers Refurbised","Manufacturers Refurbished","For Parts or Not Working"]
                ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Audio and music equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["amplifiers","audio compressors and limiters","audio interface","cassette players","cd players","dance floor","dj controllers","dj mixers","equalizers","hi-fi systems","home thearter system","karaoke","megaphone","microphones","midi controllers","mp3 players","music mixers","pa systems","radios","recievers","sound systems","soundcards","speakers","studio monitors","turntables","voice recorders","walkie talkie","other"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["AKG","AMAZ","anker","apple","awei","bang and olufsen","baofeng","behringer","B&H","BNK","BOLead","BOSE","boss","BUC","Casio","Crown","darock pro audio","djack","d-marc","edifier","focusrite","google","infinity","JBL","jiepak","jerry","juice","harman kardon","hartke","hisonic","hiview","H&H","intempo","kenwood","korg","koss","krk","LG","logitech","marcsonic","martin audio","meirende","mercury","m-audio","microsoft","motorala","niko","numark","panasonic","pioneer","philips","polystar","presonus","remax","river","river","samson","samsung","saramonic","sennheister","shure","sony","soundking","sound prince","T&G","UHF","Yamaha","Zealot","Zoom","other"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["Brand New","Used"]
                ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"computer accessories",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["adapters","batteries","barcode printers","blank cds and dvd disc","cable testers","cables","card cutter","card readers","cartridges","charges","docking stations","dongles","flash drives","fiber-optic splitter","fiber-optic enclosures","fingerprint scanner","firewall","gaming headsets","hdmi splitter","keyboard cleaners","keyboards","laptop cases","laptop cooling pads","laptop power banks","laser toners","media converters","mice","network cabels","network patch panels","patch cord","pos thermal printers","presenters","printer drums","shredders","surge protectors","tables","usb hubs","usb lamps","usb bga adapters","usb wifi adapters","vga cables","webcams","other"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["acer","apple","canon","cisco","crown","d-link","epson","hp","hikvision","infocus","hiview","huawei","genius","logitech","microsoft","optoma","sandisk","spectranet","tp-link","universal","zte","other"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["Brand New","Used"]
                ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"computer hardware",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["antiminer","cd/dvd drivers","cpu processors","computer cases","cooling fans","duplicators","hard drives (HDD)","hard drive enclosures","heatsinks","ide to sata converter","memory","motherboards","network cards","personal cloud","power supplies","solid state drives(SSD)","sound cards","serial port cards","serial port cards","server racks","uninterruptible power supplies(UPS)","ups batteries","video graphics cards","video splitters","other"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["Brand New","Used"]
                ]
              ]
            ],
            [
              "id"=>"4",
              "title"=>"computer monitors",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["aoc","apple","aser","asus","benq","dell","fujitsu","hp","hikvision","lenevo","lg","maxview","mercury","msi","nec","philips","samsung","viewsonic","other"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-model",
                  "title"=>"model",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-screen-size",
                  "title"=>"screen size",
                  "si_unit"=>"inches",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-resolution",
                  "title"=>"resolution",
                  "form"=>"select",
                  "options"=>["8k 7680x4320","6k 6016x3384","5k 5120x2880","full 4k 4096x2160","ultra hd 4k 3840x2160","3840x1600","3840x1200","3840x1080","3440x1440","2560x1600","quad hd 2560x1440","2560x1080","1920x1200","full HD 1920x1080","1600x900","1280x1024","HD 1280x720","800x600"]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-aspect-ration",
                  "title"=>"aspect ration",
                  "form"=>"select",
                  "options"=>["4:3","5:4","16:9","16:10","21:9"]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-display-technology",
                  "title"=>"display-technology",
                  "form"=>"select",
                  "options"=>["CRT","IPS","OLED","VA","TN"]
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-video-inputs",
                  "title"=>"video inputs",
                  "form"=>"multiselect",
                  "options"=>["HDMI","Display Port","VGA","DVI-D","USB 3.0","USB 2.0"]
                ],
                [
                  "id"=>"7",
                  "type"=>"advert-refresh-rate",
                  "title"=>"refresh rate",
                  "si_unit"=>"hz",
                  "form"=>"select",
                  "options"=>["240","165","144","120","100","70-85","50-60"]
                ],
                [
                  "id"=>"8",
                  "type"=>"advert-display-type",
                  "title"=>"display type",
                  "form"=>"select",
                  "options"=>["glossy","matte"]
                ],
                [
                  "id"=>"9",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange-possible",
                  "form"=>"checkbox",
                  "options"=>["yes"]
                ],
                [
                  "id"=>"10",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used","refurbished","for parts or not working"]
                ]
              ]
            ],
            [
              "id"=>"5",
              "title"=>"headphones",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>[
                    "A-Audio","Abingo","Accering","Accessonico","Accessory house","acctrend","accutone","acekool","acellories","acesori","acessorz","aceyoon","acid eye","acode","acotop","actek","actpe","acure","acuvar","adada","adafruit","addao","adidas","ADJ","admirable idea","adorer","adseon","adventure time","aedilys","aeles","aenllosi","aerocool","affordable","aftershokz","afunta","agkey","agptek","agreatlife","ahadu","ahoufher","aiaiai","Aibileec","Aigital","Aigo","Aikker","Aikonsound","Ailihen","Ailsa Anne","Ailun","Aimitek","Aimus","Ainope","Air Six","Airbuds","Aircom","Airpod skin","Airsounds","Airvily","Aisam","Aisuo","Aita","Aivant","Aiyiben","Ajusen","Akamate","Akaso","Akai","Akface","AKG","Alfheim","Aliph Jawbone","Alisten","Alitoo","Allcaca","Alctron","Alleeco","Allimity","Allimity","allnice","allocacoc","allsop","alofox","alomejor","aloutte","alova","alpatronix","alpha beats","alpha delta","alphasonik","alpinestars","alteam","altec","altec lansing","alteng","alti brands","aluratek","alwup","alxcd","alzn","alzo digital","amalen","amanecer","amasing","amaze","amazonbasics","ambar","amenon","american audio","american jewel","aminco","aminy","amlink","ammon","ammoon","amoner","amorno","amorus","amrncy","amterbest","amuoc","amyker","amysen","amyyma","amzer","amzlife","anbes","anburt","andrea communication","angry birds","anker","anki happigo","ankit","anleo","anleon","anmii","anovos","anquier","anris","ansin","anskp","antec","antiee","antopm","anyfun","nashion","aoer","aokeo","aosang","apekx","apexjoy","apollo'S","aproca","apskins","aquaguard","aquapac","arbily","archgon","archmage","arctic","arisen","arkey burds","arkimd","arknoah","arkon","arktek","aroc electronics","arrela","arteck","artifek","artifex","artiste","artix","as seen on tv","asea","ashata","ashley mary","asimom","asobilor","aspor","astell&kern","astrum","asus","AT&T","atairsoft","ATC","Atech","Atom","atomic floyd","atongm","attom tech","Attwood","audbos","audeze","audeara","audi","audio council","audio extra","audio-techica","audiofit","audiofly","audiology","audiomate","audiopark","audiophile","audiospice","audiovideo2Go","audiovox","august","aukey","aukiss","aupai","aurivor","aurtec","ausdom","autocht","autvid","auvio","auvision","auxblue","auyouwei","avantree","avazi","avia","avid","avido","aviom","avivo","awei","awinner","awow","axceed","axceed","axceed","axess","AYL","Azeca","azfunn","azonio","babywolf","badasheng","baeima","balee","ballistic","balvi","banaus","banbrick","bang and olufsen","banpresto","bae sheng","barbie","barsone","baseman","baseus","basn","bass jaxx","basspal","bassplay","bastex","batlofty","baublebar","baumgarterns","barval","bcelife","be headwear","beacon pet","beadsmith","bear butt","bearbizz","bearsfire","beartwo","beastmode","beats","beautyrest","beebang","beegod","beem united","beevo","beexcellent","behringer","belkin","bell'O Digital","bellabeat","bellman and Symfon","BEM","benestella","bengoo","beracah","besdio","besign","besom","bestfire","bestgot","bestonly","betemore","betron","bewinner","beyerdynamic","beyond wireless","beyution","bgjoy","bhuato","bigbuy","bigr audio","bigwinner","billboard","billion xin","black","black duck","blackberry","blackmore","blackweb","blaupunkt","bliiq","blitzwolf","blobfish","blucoil","blue","blue tiger","blueant","bluebay","bluebyte","bluedio","blueear","bluelark","bluelounge","bluenin","blueparrott","bluephonic","bluewall","body glove",'bohm',"boiros","boltune","bomaker","bonnaire","boomph","boompods","boost","bose","boss","bosstouch","bosuru","botuo","bounty hunter","bowers and Wilkins","bowink","boxeroo","boxwave","bradychan","bragi","brainwavz","braven","brdoogu","brenthaven","brickey,","brookstone","broski","browning","bryte gear","bt","bt waves","bttb","budweiser","bulk buys","bulker","bulusan","buwico","bvnine","BX6","bytech","c aldecott","c-color","c. crane","c.crane","c.r. laurence","C&E","cablevantage","cad audio","caeden, Inc","cahu ch","cakfun","calerix","califone","cambond","cambridge soundworks","campingmoon","canal toys","candy","candywirez","canfon","cannan","capas","captain america","cardo","casebudi","casebuy","casematix","caseology","casesack","catnee","cattree","cavn","cb3 audio","cbaooo","cectdigi","celebrat","cellaris","cellet","cellvare","censi","centon","centralsound","ceppekyy","cfzc","cg mobile","chargeworx","charlemain","charlxee","chenfec","chgeek","chicbuds","chillison","choosly","chrome bones","chsmonb","chupez","cimi","cisco","cisno","CJC","claire'S","clarity","claudio reig","clearsounds","cleer","clever bright","clevy","cloak electronics","clorox","cloud fox","cloudio","cloudio","cloudmusic","cloudninenights","cn-outlet","cobaltx","cobra","coby","cocar","cocomii","code","codio","coeuspow","comdio","comexion","comoxi","comsoon","conambo","conbeer","connect","conpush","contructive playthings","contixo","conwork","coocheer","cool elephant","coolcat","coolous","coomax","cooya","coremee  giik","cornmi","corona","cosa nova","cosmos","cosrole","costyle","cougar","couradic","coveron","cowin","cowon","cozyphones","cplus","craig electronics","crave","crayola","crazybaby","creative labs","cresuer","criacr","crislan","cross","crossactiv","crusar","crown micro","cshidworld","cta digital","cubilux","culture","cutelook","cwxuan","cyancloud","cyber acoustics","cyberdrive","cybertech","cygnett","cynthia rowley","D & K Exclusives","D-power","dacom","dady","dafuture","diaoolor","dairle","dakuan","dali","damson","danzix","darta","dashblu","datexx","david clark","day-timer","dc comics","DCI","DDC","ddsky","decibullz","deco gear","dedicated","deego","deegotech","deepcomp","deerbrook","defendershield","definitive technology","deivvox","dekoni audio","dell","delton","denon","design go","devicemate","devia","dexim","dgboy","DGL","diamond plate","dicekoo","digicom","diginex","digipower","digital essentials","digitnow","dilvpoetry","dinly","dioo","direct audio","direct sound","disney","divine music 4 u","dkaile","DMM",'Dinfo',"docooler","doctor who","dodocool","dodoli","dogxiong","doltech","doosl","doqaus","dora the explorer","dorman","doss","dostyle","dotz","dovesail","dr rock","dream fish","dream sport","dreamgear","dreamwireless","dreamworks trolls","dreo","drive audio","drop","drunkqueen","dry case","dtilfe","dttmnep","dual electronics","duck dynasty","dudios","dveda","dvestore","dxnbikt","DYJ","dylan","dynamic motion","dynex","dytesa","dzat","e elesound","e filliate","e-bour","eachbid","eaglestar","ear bud","ear waxed","earbudi","earfun","earhugz","earin","earjax","earloomz","earson","earstudio","east brooklyn labs","eastreach","easy mobile","easyshot","easysmx","ebasy","eberry","ebeylo","eboxer","ec technology","ecandy","echeer","echobox","ecko unltd.","eclipse","ecoxgear","ectreme","edelin","edge imports","edifer","edog","editional insights","edyell","eeco","efamily","efanr","eforcity","efsound","egghead","einskey","ekids","ekind","eksa","ele espirit","eleckey","elecom","eleganlife","elegant choise","elegiant","elephone","elinka","elite core","elivebuy","elwn","emerson","emerson radio","emio","emoji","emopeak","emtec","encore data","enegg","enet","enermax","enji prime","enjoy-unique","eoncore","eonfine","eonon","eornmor","eotw","eouer","epicdealz","erato","ergo","ergoguys","eruw","es","esi","esicco","esonstyle","esr","essential","essoy","etcbuys","etiger usa","etrobot","etymotic research","eurob","everdigi","everlast","everplus","evetebol","evio","evogue","evoreto","exfit","extek","extreme audio","eyekop","EZC","facever","falatek","fametek","fanverim","far end gear","farbe technik","fasgear","fashionit","fashionlive","fastwin","fatheads","fayevan","fedciory","feechagier","feeke","fender","fengshengda","ferarri","ferlen","fibevon","fiio","filido","final audio","fineblue","firik","firstec","fisher","fitbit","five 0 eight","fivoice","fixm","fixturedisplays","fkant","flare","flash party","flatfin","flineve","floyd rose","fluid + form","fmloves","FMU","focal","fogeek","fonegear","fonken","fonus","forestfish","fosa","fosmon","fospower","fostex usa","FOU","foxwise","francios et mini","franklin electronics","freeboss","freshetech","fruit of the loom","FSL","fujack","fuji","fuleadture","fullight tech","fun circle","funabaloo","funko","funxim","fusion beats","fydelity","FYY","g-color","g-cord",'g-cube',"gabba goods","gabbagoods","gabriel + simone","gadget.Cool","gadgetbrat","gadgetbucket","gardway","garrett","gavio","GDB","gdhappybuy","gear head","gear4","gearonic","gedun","geekee","geekia","geekrover","geraf","GEG","generic","genius","genija","genuine picks","gerleek","getpower","gevo","ggmm","ghostek","giaride","gibson innovations","gift republic","gigaware","giotech","giro","GJT","gladton","glazata","glcon","global tech worldwide","glovii","go travel","gobuy mart","goertek","gogroove","gohitop","golden maple","golzer","gomax","gonovate","goobay","goodbong","goodqbuy","google","goognuo","goojodoq","gorsun","govision","gpct","gpx","grado","grain audio","grantek","granvela","GRC","grde","greasmart","greatergood","greenbrier","greenelec","greyghost","griffin technology","gritin","GSD","GSI","Guardian of the galaxy","gumdrop","gusgu","gwee","H hifihear","h-ling","H20 Audio","H20 survival","Habor","haier","haisito","hal leonard","haliete","Hama","hamilton","hanerdun","hanpure","haomeja","hapfit","happy island","happy plugs","happy tails","happy-top","harman kardon","harness","harp","havit","HBQ","hbuds","heartte","hebe","helix","hello kitty","hellodigi","helping hands","hercules","hereta","hermit shell","hermitshell","herofiber","hesplus","hetyre","hexdeer","heygears","hi-mobiler","hi-fi","hibermate","hide and drink","hidizs","hiearcool","hifi walker","hifiman","highever","himatch","hiotech","hirich","hisili","hisonic","hisy","hthongdatech","hmdx","hoco","hoco.","holaca","holiper","holyhigh","homder","home zone","home love","homree","hongyu","hongyuamy","honot","honsenn","honshoop","honstek","hoom","hoomia","hopday","hori","hosa","hot topic","hotechs.","house of marley","HP","hsi","HSPRO","HTC","huawei","huayt","huifen","hummix","hussar","hustle 24/7","hydroharmony","hype","hypercel","hypergear","hyvtom","hyweiye","i love ef ifecco","i-jazz","i-kool","i-mego","i-tech","i.valux","ibasso","ibesi","iblink","ibomb","ibrands","icing","iclever","icom","icon","icontechs it","iconix","icouture","id american","idance","ideas in life","ienzagencables","iessentials","ifenc","IFI","ifox creations","ifrogz","igeekid","iharbort","iharmonix","ihip","ihome","ihuniu, Inc.","ijoy","ikey audio","ikko","ikopo","ilepo","ilive","ilogic","ilove","ilives","imango","imarku","imitation","imax","imicro","imilitis","imison","imprue","incipo","infinix","inland","innens","insignia","inspire","insten","intalk","intbase","interphone","intempo","intsun","inventive","invons","invoxia","incizi","ion audio","louio","ipipo","ipudis","iputy","iqiyi","iqua","irag","irythm","iroar","isooco","isotunes","isound","istar","istore","it.innovative technology","iteck","iteknik","itrak","ivbuy","ivibe","iwinna","iworld","ixcc","iyut","izone","j-tech digital","j&l brands","j&m cooperation","jabees","jabra","jack seller","jaderose","jam","jamfox","jamoji","jarv","jarvania","jascenci","jawbone","jaybird","jayfi","jayol","jays","jaz","jazwares","jecco","jeet","jelly comb","jensen","jentxon","jeselry","jftown","jiecan","jieliele","jinserta","jinsun","jiyishibou","jjcall","Jl supply","jlab","jnsa","jntworld","joaao","jojo","jonathan adler","jongsun","jonter","josi minea","jovers","joygeek","joyiqi","jpodream","jtd","juananiug","june & may","junehouse","junesh","junwer","just active","just wireless","justjamz","justneed","juvale","jvc","jwin","jyps","k&m","kabb","kalinco","kareandeals","kasonic","kate spade new york","kaysent","kedera","kee-ka","keekit","keewonda","KEF","keku","kellards","kensington","kenu","kenwood","ketdirect","key audio","keymao","kicker","kid-safe","kiddesign","kidrox","kidz gear","kikerland","kiko","kiko wireless","kimhee","kimwood","kinboofi","kinden","kingston","kingtop","kingyou","kinnara","kinps","kinstore","kinvoca","kitsound","kkcite","kky","klein electronics","klim","klipsch","klokol","klopor","knpaimly","kodak","koicaxy","kokkia","kole imports","koluman","konsany","koramzi","kore","kosda","koss","kovol","kppex","kptec","krankz","krk","kscat","ksingo","kubit","kuwfi","kz","l limpa world","l gracery","lanchineuse","laentina","laloopsy","lama","lampa","lanbailan","langkou","langsdom","lankey","lansay","lanpinette","larakapa","lasdolod","lasgame","lasmex","lasuney","laut","lauva","lavince","lbell","lc-dolida","leaf","learning resources","lecone","lelvise","lenovo","letol"
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-model",
                  "title"=>"model", 
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-type",
                  "title"=>"type", 
                  "form"=>"select",
                  "options"=>["in-ear","over-ear","on-ear"]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-form-factor",
                  "title"=>"form factor", 
                  "form"=>"select",
                  "options"=>["ear-hook","headband","in-ear only","neckband"]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-connectivity",
                  "title"=>"connectivity", 
                  "form"=>"select",
                  "options"=>[0=>"wired",1=>"wireless",2=>"wired / wireless"],
                  "sources"=>[
                    "advert-connecting-interface"=>[
                      0=>["2.5 mm","3.5 mm" ,"lightning","micro usb","mini usb","proprietary","usb type-c"],
                      1=>["bluetooth"],
                      2=>["2.5 mm / bluetooth","3.5 mm / bluetooth" ,"lightning / bluetooth","micro usb / bluetooth","mini usb / bluetooth","proprietary / bluetooth","usb type-c / bluetooth"]
                    ]
                  ]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-connecting-interface",
                  "title"=>"connecting interface",
                  "source_id"=>"4",
                  "form"=>"select",
                  "options"=>[] 
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-resistance",
                  "title"=>"resistance", 
                  "si_unit"=>"ohm",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"7",
                  "type"=>"advert-color",
                  "title"=>"color", 
                  "form"=>"select",
                  "options"=>["beige","black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"8",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["Brand New","Used","Refurbised","For Parts or Not Working"]
                ]
              ]
            ],
            [
              "id"=>"6",
              "title"=>"laptops & computers",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>[0=>"desktop computer",1=>"laptop",2=>"server"],
                    "sources"=>[
                        "advert-brand"=>[
                          0=>["acer","advent","apple"],
                          1=>["acer","advent","apple"],
                          2=>["dell","hp","other"]
                        ],
                        "advert-subtype"=>[
                          0=>["all-in-one","mini(compact)","thin client","workstation"],
                          1=>["chromebooks","convertible laptops","gaming laptops","traditional laptops","ultrabook"],
                          2=>["rack","tower"]
                        ]
                    ]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-brand",
                    "title"=>"brand",
                    "form"=>"select",
                    "source_id"=>"0",
                    "options"=>[]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-model",
                    "title"=>"model",
                    "form"=>"input",
                    "options"=>[] 
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-subtype",
                    "title"=>"subtype",
                    "form"=>"select",
                    "source_id"=>"0",
                    "options"=>[]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used","refurbised"]
                  ],
                  [
                    "id"=>"5",
                    "type"=>"advert-processor",
                    "title"=>"processor",
                    "form"=>"select",
                    "options"=>["intel","intel core i3","intel core i5","intel core i7"]
                  ],
                  [
                    "id"=>"6",
                    "type"=>"advert-no-of-cores",
                    "title"=>"no-of-cores",
                    "form"=>"select",
                    "options"=>["single core","dual core","quad core"]
                  ],
                  [
                    "id"=>"7",
                    "type"=>"advert-ram",
                    "title"=>"ram",
                    "form"=>"select",
                    "options"=>["1GB","2GB","3GB"]
                  ],
                  [
                    "id"=>"8",
                    "type"=>"advert-storage-capacity",
                    "title"=>"storage capacity",
                    "form"=>"select",
                    "options"=>["16GB","32GB","40GB"] 
                  ],
                  [
                    "id"=>"9",
                    "type"=>"advert-storage-type",
                    "title"=>"storage type",
                    "form"=>"select",
                    "options"=>["HDD","SSD","SSHD(Hybrid)"] 
                  ],
                  [
                    "id"=>"10",
                    "type"=>"advert-storage-display-size",
                    "title"=>"display size",
                    "form"=>"select",
                    "options"=>["10.1","11/11.6","12/12.3"] 
                  ],
                  [
                    "id"=>"11",
                    "type"=>"advert-graphics-card",
                    "title"=>"graphics card",
                    "form"=>"select",
                    "options"=>["AMD","ATI","Intel","Nvidia"] 
                  ],
                  [
                    "id"=>"12",
                    "type"=>"advert-graphics-card-memory",
                    "title"=>"graphics card memory",
                    "form"=>"select",
                    "options"=>["512MB","1GB","2GB"]  
                  ],
                  [
                    "id"=>"13",
                    "type"=>"advert-operating-system",
                    "title"=>"operating system",
                    "form"=>"select",
                    "options"=>["DOS","Free DOS","Linux","Mac OS"] 
                  ],
                  [
                    "id"=>"14",
                    "type"=>"advert-exchange-possible",
                    "title"=>"exchange possible",
                    "form"=>"checkbox",
                    "options"=>["yes"] 
                  ]
              ]
            ],
            [
              "id"=>"7",
              "title"=>"networking products",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["cisco","huawei","tp-link","zte","other"] 
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-model",
                  "title"=>"model",
                  "form"=>"input",
                  "options"=>[] 
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["access point","modem","router","switch"] 
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-number-of-lan-ports",
                  "title"=>"number of lan ports",
                  "form"=>"select",
                  "options"=>["1","2","4","8","24","more than 24"] 
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-max-speed",
                  "title"=>"max speed",
                  "form"=>"select",
                  "options"=>["150 Mbps","300 mbps","450 mbsp","1200 mbsp"] 
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used","refurbished"]  
                ]
              ]
            ],
            [
              "id"=>"8",
              "title"=>"photo & video cameras",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["action cameras","digital cameras","drones","DSLR Cameras"] 
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-make",
                  "title"=>"make",
                  "form"=>"select",
                  "options"=>["canon","dji","nikon","sony","other"] 
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-model",
                  "title"=>"model",
                  "form"=>"input",
                  "options"=>[] 
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used","refurbished"]  
                ]
              ]
            ],
            [
              "id"=>"9",
              "title"=>"printer & scanners",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["dot-matrix printer","ink jet printer","laser printer"] 
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["canon","HP","konica minolta","sharp","other"] 
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-model",
                  "title"=>"model",
                  "form"=>"input",
                  "options"=>[] 
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used","refurbished","for parts or not working"]  
                ]
                  
              ]
            ],
            [
              "id"=>"10",
              "title"=>"security & surveillance",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["dahua","generic","hikvision","hilook","other"]  
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["CCTV Camera","CCTV Kit","CCTV Tester"]    
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-connectivity",
                  "title"=>"connectivity",
                  "form"=>"select",
                  "options"=>["wired","wireless","wired / wireless"]    
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used","refurbished","for parts or not working"]  
                ] 
              ]
            ],
            [
              "id"=>"11",
              "title"=>"software",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["adobe","kaspersky","microsoft","native instrument","other"]  
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-platform",
                  "title"=>"platform",
                  "form"=>"select",
                  "options"=>["windows","mac","linux"]    
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-format",
                  "title"=>"format",
                  "form"=>"select",
                  "options"=>["CD","DVD","Digital Download"]    
                ]
              ]
            ],
            [
              "id"=>"12",
              "title"=>"TV & DVD Equipment",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["TVs","Projector","TV boxes"]    
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["Hisense","LG","Polystar","samsung","other"]    
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used","refurbished"]  
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange-possible",
                  "form"=>"checkbox",
                  "options"=>["yes"]
                ]
              ]
            ],
            [
              "id"=>"13",
              "title"=>"Video Game Consoles",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>[0=>"Game consoles",1=>"game controllers"],
                  "sources"=>[
                      "advert-subtype"=>[
                        0=>["sony playstation 4 pro","sony playstation 4 slim","sony plastation 4"],
                        1=>["dance pads","fishing rods","gamepads"]
                      ]
                    ]    
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-subtype",
                  "title"=>"subtype",
                  "form"=>"select",
                  "source_id"=>"0",
                  "options"=>[] 
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]  
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange-possible",
                  "form"=>"checkbox",
                  "options"=>["yes"]
                ]
              ]
            ]

          ]
        ]
      ],
      [
        "id"=>"5",
        "title"=>"Fashion",
        "image"=>"fashion.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Bags",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["womens","mens","unisex"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["backpacks","briefcases","card holders"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["adrienne vittadni","aldo","alba"]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-material",
                  "title"=>"material",
                  "form"=>"multiselect",
                  "options"=>["cotton","corduroy","faux leather"]
                ],
                [
                  "id"=>"4",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]  
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-closure",
                  "title"=>"closure",
                  "form"=>"multiselect",
                  "options"=>["hook and loop","magnetic snaps","plastic buckle"]  
                ],
                [
                  "id"=>"7",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange possible",
                  "form"=>"checkbox",
                  "options"=>["yes"]
                ] 
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Clothing",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["womens","mens","unisex"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["aso oke","base layers","blazers","blouses"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["4F","Acqua di stresa","adot"]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-size",
                  "title"=>"size",
                  "form"=>"multiselect",
                  "options"=>["3XS","XXS","XS","S","M","L"]
                ],
                [
                  "id"=>"4",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["Beige","black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]  
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-style",
                  "title"=>"style",
                  "form"=>"select",
                  "options"=>["casual","sport","formal"]  
                ],
                [
                  "id"=>"7",
                  "type"=>"advert-made-in-nigeria",
                  "title"=>"made in nigeria",
                  "form"=>"checkbox",
                  "options"=>["yes"]
                ]  
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Clothing Accessories",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["womens","mens","unisex"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["belts","bow ties","glasses"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["Acqua di stresa","adidas","adot"]
                ],

                [
                  "id"=>"3",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["Beige","black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]  
                ]  
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Jewelry",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["womens","mens","unisex"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["bangles","beaded jewelry","bracelets"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]  
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-main-material",
                  "title"=>"main material",
                  "form"=>"select",
                  "options"=>["acrylic","cobalt","gold"]  
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-main-stone",
                  "title"=>"main stone",
                  "form"=>"select",
                  "options"=>["alexandrite","amethyst","aquamarine"]  
                ],
                [
                  "id"=>"5",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["Beige","black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange possible",
                  "form"=>"checkbox",
                  "options"=>["yes"]
                ]  
              ]
            ],
            [
              "id"=>"4",
              "title"=>"Shoes",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["womens","mens","unisex"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["basketball shoes","boat shoes","boots"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["airavata","alberta zizi","alberto fellini"]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-size",
                  "title"=>"size",
                  "form"=>"multiselect",
                  "options"=>["35","36","37"]
                ],
                [
                  "id"=>"4",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]  
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-style",
                  "title"=>"style",
                  "form"=>"select",
                  "options"=>["casual","sports","formal"]  
                ],
                [
                  "id"=>"7",
                  "type"=>"advert-upper-material",
                  "title"=>"upper material",
                  "form"=>"multiselect",
                  "options"=>["cotton","canvas","faux leather"]  
                ],
                [
                  "id"=>"8",
                  "type"=>"advert-outsole-material",
                  "title"=>"outsole material",
                  "form"=>"multiselect",
                  "options"=>["EVA","PU","PVC"]  
                ],
                [
                  "id"=>"9",
                  "type"=>"advert-fastening",
                  "title"=>"fastening",
                  "form"=>"multiselect",
                  "options"=>["buckle","lace-up","slip on"]  
                ]
              ]
            ],
            [
              "id"=>"5",
              "title"=>"Watches",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["womens","mens","unisex"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>["apple watch","addidas","akribos XXIV"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-movement",
                  "title"=>"movement",
                  "form"=>"select",
                  "options"=>["mechanical","quartz"]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-display",
                  "title"=>"display",
                  "form"=>"select",
                  "options"=>["analog","digital","analog & digital"]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used","refurbished","for parts or not working"]  
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-case-material",
                  "title"=>"case material",
                  "form"=>"select",
                  "options"=>["aluminium","ceramic","plastic"]  
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]  
                ],
                [
                  "id"=>"7",
                  "title"=>"case color",
                  "type"=>"advert-case-color",
                  "form"=>"multiselect",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"8",
                  "title"=>"band material",
                  "type"=>"advert-band-material",
                  "form"=>"select",
                  "options"=>["aluminium","ceramic","faux leather"]
                ],
                [
                  "id"=>"9",
                  "title"=>"band color",
                  "type"=>"advert-band-color",
                  "form"=>"multiselect",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"10",
                  "type"=>"advert-style",
                  "title"=>"style",
                  "form"=>"multiselect",
                  "options"=>["business","casual","sport"]  
                ],
                [
                  "id"=>"11",
                  "type"=>"advert-features",
                  "title"=>"features",
                  "form"=>"multiselect",
                  "options"=>["compass","chronograph","calendar"]  
                ],
                [
                  "id"=>"12",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange possible",
                  "form"=>"checkbox",
                  "options"=>["yes"]
                ] 
              ]
            ],
            [
              "id"=>"6",
              "title"=>"Wedding Wear & Accessories",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-gender",
                  "title"=>"gender",
                  "form"=>"select",
                  "options"=>["womens","mens","unisex"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["bridal earing","bouquets","dresses"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used"]  
                ]
              ]
            ]
          ]
        ]
      ],
      [
        "id"=>"6",
        "title"=>"Health and Beauty",
        "image"=>"HealthandBeauty.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
                [
                  "id"=>"0",
                  "title"=>"Bath & Body",
                  "elements"=>[
                      [
                        "id"=>"0",
                        "type"=>"advert-type",
                        "title"=>"type",
                        "form"=>"select",
                        "options"=>["antiseptics","body oils","body scrubs"]
                      ]
                  ]
                ],
                [
                  "id"=>"1",
                  "title"=>"Fragrance",
                  "elements"=>[
                    [
                      "id"=>"0",
                      "type"=>"advert-gender",
                      "title"=>"gender",
                      "form"=>"select",
                      "options"=>["womens","mens","unisex"]
                    ],
                    [
                      "id"=>"1",
                      "type"=>"advert-brand",
                      "title"=>"brand",
                      "form"=>"select",
                      "options"=>["accendis","acqua di parisis","adidas"]
                    ],
                    [
                      "id"=>"2",
                      "type"=>"advert-perfume-type",
                      "title"=>"perfume type",
                      "form"=>"select",
                      "options"=>["parfum","eau de parfum","eau de toilette"]
                    ],
                    [
                      "id"=>"3",
                      "type"=>"advert-scent",
                      "title"=>"scent",
                      "form"=>"select",
                      "options"=>["citrus","fruity","floral","ocenic"]
                    ],
                    [
                      "id"=>"4",
                      "type"=>"advert-formulation",
                      "title"=>"formulation",
                      "form"=>"select",
                      "required"=>true,
                      "options"=>["oil","pencil","rollerball","spary"]
                    ],
                    [
                      "id"=>"5",
                      "type"=>"advert-volume",
                      "title"=>"volume",
                      "si_unit"=>"ml",
                      "form"=>"select",
                      "options"=>["oil","pencil","rollerball","spary"]
                    ]
                  ]
                ],
                [
                  "id"=>"2",
                  "title"=>"Hair Beauty",
                  "elements"=>[
                    [
                      "id"=>"0",
                      "type"=>"advert-type",
                      "title"=>"type",
                      "form"=>"select",
                      "require"=>true,
                      "options"=>["conditioners","creams","hair dye"]
                    ],
                    [
                      "id"=>"1",
                      "type"=>"advert-brand",
                      "title"=>"brand",
                      "form"=>"select",
                      "require"=>true,
                      "options"=>["365","A&G","Abba"]
                    ]
                  ]
                ],
                [
                  "id"=>"3",
                  "title"=>"Makeup",
                  "elements"=>[
                    [
                      "id"=>"0",
                      "type"=>"advert-gender",
                      "title"=>"gender",
                      "form"=>"select",
                      "required"=>true,
                      "options"=>["womens","mens","unisex"]
                    ],
                    [
                      "id"=>"1",
                      "type"=>"advert-type",
                      "title"=>"type",
                      "form"=>"select",
                      "required"=>true,
                      "options"=>["brushes","concealers","false eyelashes * adhesives"]
                    ],
                    [
                      "id"=>"2",
                      "type"=>"advert-brand",
                      "title"=>"brand",
                      "form"=>"select",
                      "required"=>true,
                      "options"=>["aft cosmetics","bite","alima pure"]
                    ],
                    [
                      "id"=>"3",
                      "title"=>"color",
                      "type"=>"advert-color",
                      "form"=>"select",
                      "options"=>["beige","black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                    ],
                    [
                      "id"=>"4",
                      "type"=>"advert-tone",
                      "title"=>"tone",
                      "form"=>"select",
                      "options"=>["light","media","dark"]  
                    ]
                  ]
                ],
                [
                  "id"=>"4",
                  "title"=>"Sexual Wellness",
                  "elements"=>[
                      [
                        "id"=>"0",
                        "type"=>"advert-type",
                        "title"=>"type",
                        "form"=>"select",
                        "options"=>["adult toys","body enhancing devices","condoms & Contraceptive"]
                      ]
                  ]
                ],
                [
                  "id"=>"5",
                  "title"=>"Skin care",
                  "elements"=>[
                    [
                      "id"=>"0",
                      "type"=>"advert-gender",
                      "title"=>"gender",
                      "form"=>"select",
                      "options"=>["womens","mens","unisex"]
                    ],
                    [
                      "id"=>"1",
                      "type"=>"advert-type",
                      "title"=>"type",
                      "form"=>"select",
                      "options"=>["body milk","cleansers & toners","creams","skin oils","scrubs & masks","others"]
                    ],
                    [
                      "id"=>"2",
                      "type"=>"advert-brand",
                      "title"=>"brand",
                      "form"=>"select",
                      "options"=>["111skin","21st century","acnefree","acnefree","oriflame","other"]
                    ],
                    [
                      "id"=>"3",
                      "type"=>"advert-target-area",
                      "title"=>"target area",
                      "form"=>"select",
                      "options"=>["body","eyes","face","lips"]
                    ],
                    [
                      "id"=>"4",
                      "type"=>"advert-skin-type",
                      "title"=>"skin type",
                      "form"=>"select",
                      "options"=>["combination","dry","fatigue","normal","oily","sensitive","all skin types"]
                    ],
                    [
                      "id"=>"5",
                      "title"=>"benefits",
                      "type"=>"advert-benefits",
                      "form"=>"select",
                      "options"=>["anti-aging","acne treatment","caring","hydrating","illuminating","moisturizing","oil-control"]
                    ]
                  
                  ]
                ],
                [
                  "id"=>"6",
                  "title"=>"Tobacco Accessories",
                  "elements"=>[
                    [
                      "id"=>"0",
                      "type"=>"advert-type",
                      "title"=>"type",
                      "form"=>"select",
                      "options"=>["ashtrays","cases","cigarettes","cigar","e-cigarettes","others"]
                    ]
                  ]
                ],
                [
                  "id"=>"7",
                  "title"=>"Tools & Accessories",
                  "elements"=>[
                    [
                      "id"=>"0",
                      "type"=>"advert-type",
                      "title"=>"type",
                      "form"=>"select",
                      "options"=>["blood pressure monitor","hair clippers","hair dryers","waist trimmers","others"]
                    ],
                  ]
                ]
          ]
        ]
      ],
      [
        "id"=>"7",
        "title"=>"home , furniture & appliances",
        "image"=>"homefurnitureandappliances.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Furniture",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["beds","chair","sofas","tv stands","tables"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-room",
                    "title"=>"room",
                    "form"=>"select",
                    "options"=>["bathroom","bedroom","dining room","garage","halway","other"]
                  ],
                  [
                    "id"=>"2",
                    "title"=>"color",
                    "type"=>"advert-color",
                    "form"=>"select",
                    "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Garden",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["brush cutters","canopies","flower pots","garden hoses","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Home Accessories",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["chandeliers","lighting","rugs","wallpaper","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Home Appliances",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["air conditioners","fans","sewing machine","washing machine","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used","refurbished"]
                  ]
              ]
            ],
            [
              "id"=>"4",
              "title"=>"Kichen & Dining",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["dinner sets","dish racks","kitchen utensils","pots & pans","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]
              ]
            ],
            [
              "id"=>"5",
              "title"=>"Kitchen Appliances",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["blenders","cookers","chest freezers","refrigerators","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used","refurbished","for parts or not working"]
                  ]
              ]
            ]
          ]
        ]
      ],
      [
        "id"=>"8",
        "title"=>"Jobs",
        "image"=>"jobs.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Accounting & Finance Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Advertising & Marketing Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Art & Entertainment Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Childcare & Babysitting Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"4",
              "title"=>"Clerical & Administrative Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"5",
              "title"=>"Computing & IT jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"6",
              "title"=>"Construction & Skilled trade Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"7",
              "title"=>"Consulting & Strategy Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"8",
              "title"=>"Customer Service Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"9",
              "title"=>"Driver Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"10",
              "title"=>"Engineering & Architecture Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"11",
              "title"=>"Farming & Vertinary Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"12",
              "title"=>"Gardening & Landscaping Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"13",
              "title"=>"Health & Beauty Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"14",
              "title"=>"Healthcare & Nursing Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"15",
              "title"=>"Hotel Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"16",
              "title"=>"Housekeeping & cleaning Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"17",
              "title"=>"Human resources jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"18",
              "title"=>"Internship Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"19",
              "title"=>"Legal Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"20",
              "title"=>"Logistics & Transportation Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"21",
              "title"=>"Management Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"22",
              "title"=>"Manual Labour Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"23",
              "title"=>"Manufacturing Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"24",
              "title"=>"Mining Industry Job",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"25",
              "title"=>"Office Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"26",
              "title"=>"Other Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"27",
              "title"=>"Part-Time & Weekend Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"28",
              "title"=>"Quality Control & Assurance Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"29",
              "title"=>"Research & Survey Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"30",
              "title"=>"Resturant & Bar Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"31",
              "title"=>"Retail Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"32",
              "title"=>"Sales & Telemarketing Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"33",
              "title"=>"Security Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"34",
              "title"=>"Sports Club Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"35",
              "title"=>"Teaching  Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"36",
              "title"=>"Technology Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
            [
              "id"=>"37",
              "title"=>"Travel & Tourism Jobs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["contract","freelance","full-time","intenship","part-time","temporary"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-career-level",
                    "title"=>"career level",
                    "form"=>"select",
                    "options"=>["junior","middle","senior","leadership"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-minimum-experience",
                    "title"=>"minimum experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-application-deadline",
                    "title"=>"application deadline",
                    "form"=>"input",
                    "options"=>[]
                  ],  
              ]
            ],
          ]
        ]
      ],
      [
        "id"=>"9",
        "title"=>"Mobile Phones & Tablets",
        "image"=>"mobilephonesandtablets.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Accessories for Mobile Phones & Tablets",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["cases","charger & power adapters","phone screens","power bank","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Mobile Phones",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>[
                      0=>"Apple",
                      1=>"Huawei",
                      2=>"Infinix",
                      3=>"Samsung",
                      4=>"Tecno"
                  ],
                  "sources"=>[
                    "advert-model"=>[
                        0=>["iPhone SE(2020)","iPhone 12 Pro Max","iPhone 12","iPhone 12 mini","iPhone 11 Pro Max","iPhone 11","iPhone 11 Pro","iPhone XS","iPhone X","iPhone 8 Plus","iPhone 8","iPhone 7 Plus","iPhone 7","iPhone 6s Plus","iPhone 6s","iPhone 5c","iPhone 5","iPhone 4s","iPhone 4","iPhone 4 CDMA","iPhone 3GS","iPhone 3G","other"],
                        1=>["Ascend xt2","Enjoy 10","Honor Play 7","Honor 3","Honor 2","other"],
                        2=>["Alpha x570","Alpha Marvel X502","Buzz x260","diamond","Hot 10 Lite X657B","Hot 10","other"],
                        3=>["Galaxy A","Galaxy A01","Galaxy A3","Galaxy A5","Galaxy A7"],
                        4=>["Camon 16","B3","Boom J8","Camon c9","L7","L8","Pop 3","other"]
                    ]
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-model",
                  "title"=>"model",
                  "source_id"=>"0",
                  "form"=>"select",
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>[
                    0=>"brand new",1=>"used",2=>"refurbished"
                  ],
                  "sources"=>[
                    "advert-second-condition"=>[
                      0=>["No faults"],
                      1=>["No cracks","cracked body","cracked camera","cracked front & back","cracked screen","not working battery"],
                      2=>["No faults"]
                    ]
                  ]

                ],
                [
                  "id"=>"3",
                  "type"=>"advert-second-condition",
                  "title"=>"second condition",
                  "source_id"=>"2",
                  "form"=>"select",
                  "options"=>[]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-ram",
                  "title"=>"ram",
                  "form"=>"select",
                  "options"=>[
                    0=>"< 512 MB",1=>"1 GB",2=>"2 GB",3=>"4 GB",4=>"6 GB",5=>"8 GB",6=>"12 GB"
                  ]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-internal-storage",
                  "title"=>"internal storage",
                  "source_id"=>"2",
                  "form"=>"select",
                  "options"=>["16 GB","64 GB","128 GB","256 GB","other"]
                ],
                [
                  "id"=>"6",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"7",
                  "title"=>"operating system",
                  "type"=>"advert-operating-system",
                  "form"=>"select",
                  "options"=>["ios","android"]
                ],
                [
                  "id"=>"8",
                  "title"=>"card slot",
                  "type"=>"advert-card-slot",
                  "form"=>"select",
                  "options"=>["ios","android"]
                ],
                [
                  "id"=>"9",
                  "title"=>"main camera",
                  "type"=>"advert-main-camera",
                  "si_unit"=>"MP",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"10",
                  "title"=>"selfie camera",
                  "type"=>"advert-selfie-camera",
                  "si_unit"=>"MP",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"11",
                  "title"=>"battery",
                  "type"=>"advert-battery",
                  "si_unit"=>"mAh",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"12",
                  "title"=>"exchange possible",
                  "type"=>"advert-exchange-possible",
                  "form"=>"select",
                  "options"=>["yes"]
                ],
                [
                  "id"=>"13",
                  "title"=>"sim",
                  "type"=>"advert-sim",
                  "form"=>"select",
                  "options"=>["single","dual nano-sim/esim"]
                ],
                [
                  "id"=>"14",
                  "type"=>"advert-screen-size",
                  "title"=>"screen size",
                  "form"=>"select",
                  "options"=>["< 4 inches"," 4-5 inches"," 5.1-6 inches","6.1 > inches"]
                ],

                
                
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Smart Watches & Trackers",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-brand",
                    "title"=>"brand",
                    "form"=>"select",
                    "options"=>["apple","samsung","fitbit","huawei","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["fitness tracker","smart watches"]
                  ],
                  [
                    "id"=>"2",
                    "title"=>"band color",
                    "type"=>"advert-band-color",
                    "form"=>"select",
                    "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"band-material",
                    "type"=>"advert-band-material",
                    "form"=>"select",
                    "options"=>["aluminum","ceramics","faux leather","genuine leather","nylon","polyurethane","rubber","stainless steel"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used","refurbished"]
                  ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Tablet",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-brand",
                  "title"=>"brand",
                  "form"=>"select",
                  "options"=>[
                      0=>"Apple",
                      1=>"Atouch",
                      2=>"Samsung",
                      3=>"Wintouch",
                      4=>"other"
                  ],
                  "sources"=>[
                    "advert-model"=>[
                        0=>["iPad Air","iPad Air 2","iPad Pro 12.9 (2015)","iPad mini 5","other"],
                        1=>["A6","A7","A13","other"],
                        2=>["Ativ Tab P8510","Galaxy Tab Active Pro","Galaxy Tab Advanced 2","Galaxy Tab Active3","other"],
                        3=>["K12","K11","K72","K79","K93","M18","other"],
                        4=>["other"]
                    ]
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-model",
                  "title"=>"model",
                  "source_id"=>"0",
                  "form"=>"select",
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","used","refurbished"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>[
                    0=>"brand new",1=>"used",2=>"refurbished"
                  ],
                  "sources"=>[
                    "advert-second-condition"=>[
                      0=>["No faults"],
                      1=>["No cracks","cracked body","cracked camera","cracked front & back","cracked screen","not working battery"],
                      2=>["No faults"]
                    ]
                  ]

                ],
                [
                  "id"=>"3",
                  "type"=>"advert-second-condition",
                  "title"=>"second condition",
                  "source_id"=>"2",
                  "form"=>"select",
                  "options"=>[]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-storage-capacity",
                  "title"=>"storage capacity",
                  "form"=>"select",
                  "options"=>[
                    "4 GB","8 GB","16 GB","32 GB","64 GB","128 GB","256 GB","512 GB"
                  ]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-screen-size",
                  "title"=>"screen size",
                  "form"=>"select",
                  "options"=>["< 7 inches"," 7-8.9 inches"," 9-10.9 inches","11-12.9  inches","13 >inches"]
                ],
                [
                  "id"=>"6",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"7",
                  "title"=>"operating system",
                  "type"=>"advert-operating-system",
                  "form"=>"select",
                  "options"=>["ios","android","windows","other"]
                ],
                [
                  "id"=>"8",
                  "type"=>"advert-ram",
                  "title"=>"ram",
                  "form"=>"select",
                  "options"=>[
                    0=>"< 512 MB",1=>"1 GB",2=>"2 GB",3=>"4 GB",4=>"6 GB",5=>"8 GB",6=>"12 GB"
                  ]
                ],
                [
                  "id"=>"9",
                  "title"=>"exchange possible",
                  "type"=>"advert-exchange-possible",
                  "form"=>"select",
                  "options"=>["yes"]
                ]



               

                
                
              ]
            ],
          ]
        ]
      ],
      [
        "id"=>"10",
        "title"=>"Property",
        "image"=>"property.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Commercial Property for rent",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-address",
                    "title"=>"address",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["complex","office space","open space","shop","warehouse"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["newly built","fairly used","old"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-secure-parking",
                    "title"=>"secure parking",
                    "form"=>"checkbox",
                    "options"=>["yes"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-square-meter",
                    "title"=>"square meter",
                    "si_unit"=>"sqm",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"5",
                    "type"=>"advert-minimum-rent-time",
                    "title"=>"minimum rent time",
                    "si_unit"=>"days",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Commercial Property for sale",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-address",
                    "title"=>"address",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["filling station","hotel","office space","shop","warehouse","other"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["newly built","fairly used","old"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-furnishing",
                    "title"=>"furnishing",
                    "form"=>"select",
                    "options"=>["furnishing","semi-furnished","unfurnished"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-parking-spaces",
                    "title"=>"parking spaces",
                    "form"=>"select",
                    "options"=>["1","2","3","4","5","6","7","8","9","10","10+"]
                  ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Event centers, Venues and Workstation",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-address",
                    "title"=>"address",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["ballroom","church","conference center","coworking space","club hall","gallery","garden","marquee","meeting room","multipurpose Hall","museum","private office","restaurant","theatre","training hall","workstation"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-capacity",
                    "title"=>"capacity",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-duration",
                    "title"=>"duration",
                    "form"=>"select",
                    "options"=>["hour","daily","weekly","monthly"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-facilities",
                    "title"=>"facilities",
                    "form"=>"multiselect",
                    "options"=>["air conditioner","chair","changing room","heated floors","internet","microphones","power generator","projector","refrigerator","security","sound speakers","tables"]
                  ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Houses & Apartment for rent",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-address",
                    "title"=>"address",
                    "form"=>"input",
                    "si_unit"=>"sqm",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-property-size",
                    "title"=>"property size",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["block of flats","bungalow","chalet","condo","duplex","farm house","other"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["newly built","fairly used","renovated","old"]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-furnishing",
                    "title"=>"furnishing",
                    "form"=>"select",
                    "options"=>["furnished","semi-furnished","unfurnished"]
                  ],
                  [
                    "id"=>"5",
                    "type"=>"advert-bethrooms",
                    "title"=>"bedrooms",
                    "form"=>"select",
                    "options"=>["1","2","3","4","5","6","7","8","9","10","10+"]
                  ],
                  [
                    "id"=>"6",
                    "type"=>"advert-pets",
                    "title"=>"pets",
                    "form"=>"select",
                    "options"=>["pets allowed","no pets"]
                  ],
                  [
                    "id"=>"7",
                    "type"=>"advert-facilities",
                    "title"=>"facilities",
                    "form"=>"multiselect",
                    "options"=>["air conditioner","24 hour electricity","balcony","chandelier","dining area","dishwasher"]
                  ],
                  [
                    "id"=>"8",
                    "type"=>"advert-agency-fee",
                    "title"=>"agency fee",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"9",
                    "type"=>"advert-legal-agreement-fee",
                    "title"=>"legal agreement fee",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"10",
                    "type"=>"advert-caution-fee",
                    "title"=>"caution fee",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ]  
          ]
        ]
      ],
      [
        "id"=>"11",
        "title"=>"Repair & Construction",
        "image"=>"repairandconstruction.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Building Material",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["ceiling","flooring materials","handrails","roofing materials","other"]
                  ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Doors",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["front door","double door","garage door","gates","other"]
                  ],
                  [
                    "id"=>"1",
                    "title"=>"color",
                    "type"=>"advert-color",
                    "form"=>"select",
                    "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                  ],
                  [
                    "id"=>"2",
                    "title"=>"material",
                    "type"=>"advert-material",
                    "form"=>"select",
                    "options"=>["aluminium","composite","glass","stainless steel","wood"]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new" ,"used"]
                  ]
              ]
            ]
          ]
        ]
      ],
      [
        "id"=>"12",
        "title"=>"Seeking Work - CVs",
        "image"=>"seekingworkcvs.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Accounting & Finance CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Advertising & Marketing CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Arts & Entertainment CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Childcare & Babysitting CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"4",
              "title"=>"Clerical & Administrative CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"5",
              "title"=>"Computing & IT CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"6",
              "title"=>"Construction & Skill Trade CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"7",
              "title"=>"Consulting & Strategy CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"8",
              "title"=>"Customer Service CVs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-work-experience",
                    "title"=>"work experience",
                    "form"=>"select",
                    "options"=>["less than 1 year","1 year","2 years","3 years","4 years","5 years","more than 5 years"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-job-type",
                    "title"=>"job type",
                    "form"=>"select",
                    "options"=>["full-time","part-time","temporary","contract","internship"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-employment-status",
                    "title"=>"employment status",
                    "form"=>"select",
                    "options"=>["unemployed","employed","self-employed","retired/pensioner"]
                  ],
                  [
                    "id"=>"3",
                    "title"=>"gender",
                    "type"=>"advert-gender",
                    "form"=>"select",
                    "options"=>["male","female"]
                  ],
                  [
                    "id"=>"4",
                    "title"=>"marital status",
                    "type"=>"advert-marital-status",
                    "form"=>"select",
                    "options"=>["single","married","divorced"]
                  ],
                  [
                    "id"=>"5",
                    "title"=>"still studying",
                    "type"=>"advert-still-studying",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "title"=>"age",
                    "type"=>"advert-age",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
          ]
        ]
      ],
      [
        "id"=>"13",
        "title"=>"services",
        "image"=>"services.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Automotive Services",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Building & Trade Services",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-service-type",
                    "title"=>"service type",
                    "form"=>"select",
                    "options"=>["domestic","industrial","domestic & industrial"]
                  ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Chauffeur & Airport transfer Services",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Childcare & Education Services",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-company-name",
                    "title"=>"company name",
                    "form"=>"input",
                    "options"=>[]
                  ]
              ]
            ],
          ]
        ]
      ],
      [
        "id"=>"14",
        "title"=>"Sports , Art & outdoors",
        "image"=>"sportsartsandoutdoors.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Arts & Craft",
              "elements"=>[
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Books & Games",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["books","board games"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-age-level",
                    "title"=>"age level",
                    "form"=>"select",
                    "options"=>["adult","baby","children"]
                  ]
              ]
            ],
            [
              "id"=>"2",
              "title"=>"CDs & DVDs",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["audiobooks","movies","music","tutorial","training","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Camping Gear",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["binoculars","camping mat","compass","cooking supplies","lanterns & Headlamps","furniture","shower bag","sheeping bags","tents","telescopes","trakking poles","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]
              ]
            ],
            [
              "id"=>"4",
              "title"=>"Musical Instruments & Gear",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>[
                      0=>"keyboard instruments",
                      1=>"musical stands",
                      2=>"percussion",
                      3=>"string instruments",
                      4=>"wind instruments",
                      5=>"other"
                    ],
                    "sources"=>[
                      "advert-subtype"=>[
                        0=>["bags & cases","midi keyboard","organ pianos","synthesizer","parts & accessories","other"],
                        1=>["bags & cases","drum stands","guitar stands","keyboard stands","microphone stands","sheet music stand","other"],
                        2=>["acoustic drum sets","bags & cases","bass drums","other"],
                        3=>["acoustic guitar","bags & cases","bass guitar","banjo","cello","electric guitar"],"other",
                        4=>["bags & cases","clarinets","flutes","trambone","trumpets","other"],
                        5=>["other"]
                      ]
                    ]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-subtype",
                    "title"=>"subtype",
                    "form"=>"select",
                    "source_id"=>0,
                    "options"=>[]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]

              ]
            ],
            [
              "id"=>"5",
              "title"=>"Sports Equipment",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-type",
                    "title"=>"type",
                    "form"=>"select",
                    "options"=>["dumbbells","snooker table","tennis boards","treadmills","other"]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","used"]
                  ]
              ]
            ],
          ]
        ]
      ],
      [
        "id"=>"15",
        "title"=>"vehicles",
        "image"=>"vehicles.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Buses & Microbuses",
              "elements"=>[
                  [
                    "id"=>"0",
                    "type"=>"advert-make",
                    "title"=>"make",
                    "form"=>"select",
                    "options"=>[
                      0=>"toyota",
                      1=>"mercedes-benz",
                      2=>"volkswagen",
                      3=>"ford",
                      4=>"suzuki",
                      5=>"other"
                    ],
                    "sources"=>[
                      "advert-model"=>[
                        0=>["coaster","grand HiAce","HiAce","Quantum"],
                        1=>["sprinter","tourismo","T1/TN","T2","Vito"],
                        2=>["LT","Transporter"],
                        3=>["B700","E250","E350","E450","E550","Excursion","F550","F650","Hot Rod Duece","Husky","Tourneo","Transit"],
                        4=>["EV","APV Minibus","APV Pan Vanel"],
                        5=>["other"]
                      ]
                    ]
                  ],
                  [
                    "id"=>"1",
                    "type"=>"advert-model",
                    "title"=>"model",
                    "form"=>"select",
                    "source_id"=>0,
                    "options"=>[]
                  ],
                  [
                    "id"=>"2",
                    "type"=>"advert-year-of-manufacture",
                    "title"=>"year of manufacture",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"3",
                    "type"=>"advert-mileage",
                    "title"=>"mileage",
                    "si_unit"=>"km",
                    "form"=>"input",
                    "options"=>[]
                  ],
                  [
                    "id"=>"4",
                    "type"=>"advert-condition",
                    "title"=>"condition",
                    "form"=>"select",
                    "options"=>["brand new","nigerian used","foreign used"]
                  ],
                  [
                    "id"=>"5",
                    "type"=>"advert-exchange-possible",
                    "title"=>"exchange possible",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ],
                  [
                    "id"=>"6",
                    "type"=>"advert-registered",
                    "title"=>"registered",
                    "form"=>"select",
                    "options"=>["yes","no"]
                  ]
              ]
            ],
            [
              "id"=>"1",
              "title"=>"Cars",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-make",
                  "title"=>"make",
                  "form"=>"select",
                  "options"=>[
                    0=>"ford",
                    1=>"honda",
                    2=>"lexus",
                    3=>"mercedes-benz",
                    4=>"toyota",
                    5=>"other"
                  ],
                  "sources"=>[
                    "advert-model"=>[
                      0=>["aerostar","anglia","bantam","bronco","c-max","contour","E-150","E-250","Expedition","Excursion","F-150","Festiva","Galaxy","Granada","GT","Ka","Laser","Maverick","Orion","Probe","Puma","Ranger","Sierra","S-Max","Taurus","Telstar","thunderbird","windstar","other"],
                      1=>["accord","accord cross tour","ballade","capa","city","CR-V","CR-X","Element","Elysion","Freed","HR-V","Insight","Jazz","Legend","Passport","pilot","prelude","ridgeline","s2000","S-MX","Stepwgn","vamos","vigor","other"],
                      2=>["CT","ES","GS","GX","IS","LC","LS","LX","NX","RC","RX","SC","UX"],
                      3=>["1113","1117","1420","190","200","2024","220E","300D","300TE","A-Class","Actros","Atego","Axor","B-Class","C43","CI80","C250","C300","C350","C400","Citaro","Cito","CL","CLA-Class","CLC","CLK","CLS","Conecto","E200","E300","E350","E500","GLA-Class","Inegro","Intouro","MB100","M Class","X Class","other"],
                      4=>["1000","4-Runner","Avalon","Avensis","Camry","Celica","Chaser","Corolla","Corona","FJ Cruiser","Highlander","Matrix","Noah","Picnic","Quantum","RAV4","Sienna","Spade","Sprinter","Stallion","Tundra","Vanguard","Venza","Voxy","Yaris","other"],
                      5=>["other"]
                    ]
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-model",
                  "title"=>"model",
                  "form"=>"select",
                  "source_id"=>0,
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-year-of-manufacture",
                  "title"=>"year of manufacture",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"3",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","nigerian used","foreign used"]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-transmission",
                  "title"=>"transmission",
                  "form"=>"select",
                  "options"=>["automatic","manual"]
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-mileage",
                  "title"=>"mileage",
                  "si_unit"=>"km",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"7",
                  "type"=>"advert-registered",
                  "title"=>"registered",
                  "form"=>"select",
                  "options"=>["yes","no"]
                ],
                [
                  "id"=>"8",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange possible",
                  "form"=>"select",
                  "options"=>["yes","no"]
                ],
                [
                  "id"=>"9",
                  "type"=>"advert-seats",
                  "title"=>"seats",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"10",
                  "type"=>"advert-engine-size",
                  "title"=>"engine size",
                  "si_unit"=>"L",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"11",
                  "type"=>"advert-horse-power",
                  "title"=>"horse-power",
                  "si_unit"=>"hp",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"12",
                  "type"=>"advert-fuel-type",
                  "title"=>"fuel type",
                  "form"=>"select",
                  "options"=>["disel","electric","hybrid","LPG","Petrol"]
                ],
              ]
            ],
            [
              "id"=>"2",
              "title"=>"Heavy Equipments",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>[
                    0=>"Bulldozers",
                    1=>"Cranes",
                    2=>"Excavators",
                    3=>"forklifts",
                    4=>"Loaders",
                    5=>"other"
                  ],
                  "sources"=>[
                    "advert-make"=>[
                      0=>["caterpillar","grove","mack truck","massey ferguson","other"],
                      1=>["caterpillar","grove","mack truck","massey ferguson","other"],
                      2=>["caterpillar","grove","mack truck","massey ferguson","other"],
                      3=>["caterpillar","grove","mack truck","massey ferguson","other"],
                      4=>["caterpillar","grove","mack truck","massey ferguson","other"],
                      5=>["other"]
                    ]
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-make",
                  "title"=>"make",
                  "form"=>"select",
                  "source_id"=>0,
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-year-of-manufacture",
                  "title"=>"year of manufacture",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","nigerian used","foreign used"]
                ],
                [
                  "id"=>"4",
                  "type"=>"advert-fuel-type",
                  "title"=>"fuel type",
                  "form"=>"select",
                  "options"=>["disel","electric","hybrid","LPG","Petrol"]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange possible",
                  "form"=>"select",
                  "options"=>["yes","no"]
                ],
              ]
            ],
            [
              "id"=>"3",
              "title"=>"Motorcycles & Scooters",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-make",
                  "title"=>"make",
                  "form"=>"select",
                  "options"=>[
                    0=>"Bajaj",
                    1=>"Honda",
                    2=>"Qlink",
                    3=>"Suzuki",
                    4=>"other"
                  ],
                  "sources"=>[
                    "advert-model"=>[
                      0=>["boxer","pulsar 220 F","Pulsar 150","other"],
                      1=>["CB","CBR","CG110","Gold Wing","other"],
                      2=>["achilles 150","axon 50","adventure 250","other"],
                      3=>["750","bandit","bike","DR-Z","other"],
                      4=>["other"]
                    ]
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-model",
                  "title"=>"model",
                  "form"=>"select",
                  "source_id"=>0,
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-year-of-manufacture",
                  "title"=>"year of manufacture",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-engine-capacity",
                  "title"=>"engine capacity",
                  "form"=>"input",
                  "si_unit"=>"cc",
                  "options"=>[]
                ],
                [
                  "id"=>"4",
                  "title"=>"color",
                  "type"=>"advert-color",
                  "form"=>"select",
                  "options"=>["black","blue","brown","gold","gray","green","orange","pink","purple","red","silver","violet","white","yellow","other"]
                ],
                [
                  "id"=>"5",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","nigerian used","foreign used"]
                ],
                [
                  "id"=>"6",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["cruiser","dual aport","motocross","quad(atv)","retro","scooter","sport bike","standard (naked)","touring","tricycle","other"]
                ],
                [
                  "id"=>"7",
                  "type"=>"advert-transmission",
                  "title"=>"transimission",
                  "form"=>"select",
                  "options"=>["automatic","manual"]
                ],
                [
                  "id"=>"8",
                  "type"=>"advert-mileage",
                  "title"=>"mileage",
                  "form"=>"input",
                  "si_unit"=>"km",
                  "options"=>[]
                ],
                [
                  "id"=>"9",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange possible",
                  "form"=>"select",
                  "options"=>["yes","no"]
                ],
              ]
            ],
            [
              "id"=>"4",
              "title"=>"Trucks & Trailer",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>[
                    0=>"Crane Truck",
                    1=>"Dump Truck",
                    2=>"Fight Fighting Truck",
                    3=>"Food Truck",
                    4=>"Garbage Truck",
                    5=>"other"
                  ],
                  "sources"=>[
                    "advert-make"=>[
                      0=>["DAF","MAN","Mack","Mercedes-Benz","Toyota","other"],
                      1=>["DAF","MAN","Mack","Mercedes-Benz","Toyota","other"],
                      2=>["DAF","MAN","Mack","Mercedes-Benz","Toyota","other"],
                      3=>["DAF","MAN","Mack","Mercedes-Benz","Toyota","other"],
                      4=>["DAF","MAN","Mack","Mercedes-Benz","Toyota","other"],
                      5=>["other"]
                    ]
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-make",
                  "title"=>"make",
                  "form"=>"select",
                  "source_id"=>0,
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-year-of-manufacture",
                  "title"=>"year of manufacture",
                  "form"=>"input",
                  "options"=>[]
                ],
                [
                  "id"=>"3",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange possible",
                  "form"=>"select",
                  "options"=>["yes","no"]
                ],
              ]
            ],
            [
              "id"=>"5",
              "title"=>"Vehicle Parts & Accessories",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>[
                    0=>"Audio Parts",
                    1=>"Brakes , Suspension & Steering",
                    2=>"Engine & Drivetrain",
                    3=>"Exterior Accessories",
                    4=>"other"
                  ],
                  "sources"=>[
                    "advert-subtype"=>[
                      0=>["audio accessories","amplifiers","CD Players","component split systems","other"],
                      1=>["air suspension components","ball joints & components","brakes discs, pads & calipers","brake drums,shoes & components","other"],
                      2=>["air filters & intake systems","axles & driveshaft","cams,timing & valvetrain","other"],
                      3=>["air dams","antennas","bumpers & parts","car covers","other"],
                      4=>["other"]
                    ]
                  ]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-subtype",
                  "title"=>"subtype",
                  "form"=>"select",
                  "source_id"=>0,
                  "options"=>[]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","nigerian used","foreign used"]
                ],
                
              ]
            ],
            [
              "id"=>"6",
              "title"=>"Watercraft & Boats",
              "elements"=>[
                [
                  "id"=>"0",
                  "type"=>"advert-type",
                  "title"=>"type",
                  "form"=>"select",
                  "options"=>["Barges & Pontoons","Dredgers","tugboats","Yachts","other"]
                ],
                [
                  "id"=>"1",
                  "type"=>"advert-condition",
                  "title"=>"condition",
                  "form"=>"select",
                  "options"=>["brand new","nigerian used","foreign used"]
                ],
                [
                  "id"=>"2",
                  "type"=>"advert-exchange-possible",
                  "title"=>"exchange possible",
                  "form"=>"select",
                  "options"=>["yes","no"]
                ],

                
              ]
            ],
          ]
        ]
      ],
      [
        "id"=>"16",
        "title"=>"Oil and Gas",
        "image"=>"oilandgas.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Oil and Gas",
              "elements"=>[]
            ],
          ]
        ]
      ],
      [
        "id"=>"17",
        "title"=>"Innovation & Educational Institution",
        "image"=>"innovationandeducationalinstitution.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Pre-nursery,nursery,primary and secondary schools",
              "elements"=>[]
            ],
            [
              "id"=>"1",
              "title"=>"University",
              "elements"=>[]
            ],
            [
              "id"=>"2",
              "title"=>"Polytechnic",
              "elements"=>[]
            ],
            [
              "id"=>"3",
              "title"=>"College of education",
              "elements"=>[]
            ],
            [
              "id"=>"4",
              "title"=>"Other",
              "elements"=>[]
            ],
          ]
        ]
      ],
      [
        "id"=>"18",
        "title"=>"Hospitality Industry",
        "image"=>"hospitalityindustry.jpg",
        "categories"=>[
          "type"=>"advert-category",
          "form"=>"select",
          "advert_list"=>[
            [
              "id"=>"0",
              "title"=>"Food and Beverages",
              "elements"=>[]
            ],
            [
              "id"=>"1",
              "title"=>"Travel and Tourism",
              "elements"=>[]
            ],
            [
              "id"=>"2",
              "title"=>"Lodging",
              "elements"=>[]
            ],
            [
              "id"=>"3",
              "title"=>"Recreation",
              "elements"=>[]
            ],
          ]
        ]
      ],
    ]
  ]
];




