<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        Product::create(['name'=>'ISO Whey Clear','price'=>2500,'image'=>'images\Products\ISO Whey Clear.jpg','description'=>'Clear Whey is not just another protein shake. We’ve taken high-quality hydrolysed whey protein isolate and created a light and refreshing alternative — that’s more like juice than a milky protein shake.','type'=>'nutrition']);
        Product::create(['name'=>'Cellutor','price'=>3000,'image'=>'images\Products\Cellutor.png','description'=>'COR-Performance Whey Isolate Protein Powder is an optimal source of protein when you’re looking to maintain lean muscle, replenish nutrients after a workout, and indulge your sweet tooth guilt-free.Every two scoops of COR-Performance Whey Isolate Protein Powder is packed with 24g of fast-acting whey protein and digestive enzymes so that you can satisfy your protein needs anytime of the day.','type'=>'nutrition']);
        Product::create(['name'=>'Grass-Fed Whey Protein Isolate','price'=>2500,'image'=>'images\Products\Grass-Fed.webp','description'=>'Made from naturally fed, hormone-free cow whey and clean of artificial sweeteners, food dyes, gluten, and preservatives, Transparent Labs 100% Grass-Fed Whey Protein Isolate is one of the cleanest proteins on the market. It’s perfect for post-workout recovery and hitting daily protein goals.','type'=>'nutrition']);
        Product::create(['name'=>'Fast&Up Pre Workout','price'=>1500,'image'=>'images\Products\Fast&Up.webp','description'=>'Extreme Mental FocusIntense Energy Blast.High Octane Power Output with Explosive Energy Blend.Refreshing Watermelon Flavour, Banned Substance Free.How To Use - Mix one scoop in 1000 ml water. Consume 20-30 minutes before training','type'=>'nutrition']);
        Product::create(['name'=>'Kapiva Vegan Protein','price'=>1600,'image'=>'images\Products\Vegan Protein.webp','description'=>'Kapiva Vegan Protein- Chocolate is a healthy mix of nutrients with 26g of protein, 4.97g BCAAs, 4.54g Glutamic Acid and 26 Vitamins & Minerals. This is a great option for enhancing protein in vegetarian diets which are often low in protein. It also helps you recover quickly after a workout and supports the process of muscle building.','type'=>'nutrition']);
        Product::create(['name'=>'GNC Pro Performance 100% Whey Protein ','price'=>3200,'image'=>'images\Products\Pro Whey.webp','description'=>'GNC Pro Performance Whey Protein 2 kg Chocolate Supreme comes loaded with 100% whey protein to help you fulfill your daily protein requirement. With GNC Whey Protein, you get 24g of protein per 36g serving which helps fuel your muscles and assists in speedy recovery. GNC Pro Performance Chocolate Supreme comes fortified with 100% whey protein (whey concentrate and whey isolate) which caters the protein requirement essential for bodybuilders, fitness enthusiasts while catering general protein requirement of individuals as well.','type'=>'nutrition']);
        Product::create(['name'=>'GNC Total Lean Shake 25','price'=>1800,'image'=>'images\Products\Lean Shake.webp','description'=>'Meal Replacer is a substitute to your meal which is usually low in carbs, calories, high in fibre and meets your daily 1/3rd essential vitamin and mineral requirement. Meal replacements are designed for a wide variety of diets, each with its own specific needs. A. Protein is the satiating nutrient and whey protein is the best. Meal replacements are also a convenient and effective way to exercise portion control, an essential component of a successful weight management plan.','type'=>'nutrition']);
        Product::create(['name'=>'FINAFLEX Clear Protein','price'=>3000,'image'=>'images\Products\FinaFlex.jpg','description'=>'CLEAR PROTEIN delivers 25 Grams of the highest quality protein available in each serving, featuring Whey Protein Hydrolysate (Hydrolyzed Whey), regarded as the premier form of whey protein on the market. Using instantized proteins virtually guarantees a smooth, full-bodied milkshake-like consistency each and every time CLEAR PROTEIN is mixed in just 6-8 ounces of water or other beverage.','type'=>'nutrition']);
        Product::create(['name'=>'BLESSED Plant-Based Protein','price'=>3200,'image'=>'images\Products\Blessed.jpg','description'=>'Blessed Protein is an all-natural and vegan-friendly pure golden pea protein isolate that contains 23g of protein per scoop and all of the essential amino acidsat only 4g of net carbs. This means Blessed will keep you fuller for longer without any bloating. No need to stress out about your daily protein intake with Blessed Protein.','type'=>'nutrition']);
        Product::create(['name'=>' MyProtein','price'=>2600,'image'=>'images\Products\Myprotein.jpg','description'=>' MyProtein is an extremely rich source of whey isolate, having undergone an expert purifying process to ensure maximum protein integrity, and deliver 90% protein and just 1% fat.','type'=>'nutrition']);
        Product::create(['name'=>'HD Essential Protein Powder (Sweet Vanilla Flavor)','price'=>2500,'image'=>'images\Products\Halleljuah Diet.jpg','description'=>'Organic Essential Protein Sweet Vanilla Flavor is ideal for anyone with an active, outdoors, stay-fit lifestyle. Organic Essential Protein Sweet Vanilla Flavor will help you maintain a lean body, build strong healthy bones, and strengthen your immune system.* Worry free, delicious, and good for you.','type'=>'nutrition']);


        Product::create(['name'=>'MAXPRO PTM405M 2HP(4 HP Peak) Multifunction Folding Treadmill','price'=>30000,'image'=>'images\Products\Maxpro Treadmill.jpg','description'=>'2.0 HP(4 HP Peak) DC quite motor deliver power for interval, speed, or endurance training. Speed: 1 to 14 km/hr Speed levels available, you can select different speed base on your physical condition and exercise based.Warranty Details : 1 Year Motor Warranty, 1 Year Part Warranty, Life time Frame Warranty.','type'=>'gym equipment']);
        Product::create(['name'=>'Life Fitness Weight Station G4','price'=>28000,'image'=>'images\Products\Fitness Weight Station G4.png','description'=>'The Life Fitness Weight Station G4 offers an even wider selection of exercises for training the entire body so you never get bored during workouts. Experience additional exercises that challenge your muscles in completely new ways. The adjustable training bench, the comfortable back rest and chest support and the different grip positions of the Life Fitness Kraftstation GS4 offer a high degree of comfort and ergonomics.','type'=>'gym equipment']);
        Product::create(['name'=>'Olympic Incline Bench','price'=>18000,'image'=>'images\Products\Olympic Incline Bench.jpg','description'=>'Designed as per the international standards of power lifting. Ten-inch bench width allows free shoulder movement during bench press. Forty-eight inch bench length allows full stretch of the users body. Two positions replaceable bar hold assembly with heavy-duty stainless steel plate for durability. 30 degree inclined backrest for optimum exercise benefit. Heavy duty platform provided for the spotter.','type'=>'gym equipment']);
        Product::create(['name'=>'StarX 10 Kg Home Gym Exercise Set','price'=>2000,'image'=>'images\Products\StarX 10KG GYM set.jpg','description'=>'This set of adjustable PVC dumbbells is an excellent choice for a home gym. This take seconds to assemble and take out. Compact, convenient, and easy to use and store. All-for-one dumbbells eliminate the need for multiple dumbbells in your workout space.','type'=>'gym equipment']);
        Product::create(['name'=>'WELCARE Multi Adjustable Weight Bench','price'=>8000,'image'=>'images\Products\WELCARE Multi weight bench.jpg','description'=>'8 backrest positions get you to hit specific muscles you need. This versatile bench can be adjusted to Incline, Decline and Flat Weight Bench and thus can be used to exercise different muscle groups such as the chest, shoulders, core and lower body, so you can have balanced muscle development.','type'=>'gym equipment']);
        Product::create(['name'=>'Infinity Bench','price'=>20000,'image'=>'images\Products\Infinity Bench.jpg','description'=>'20 in 1 Bench It can be used (Flat /Incline/Decline/ / Lag Curl/Leg Extension/ Lat pull Down /Ground Pulley/Arm Curl / Chest press / Butterfly/Dips/Twister) , If you want the ability to perform all the basic barbell and dumbbell exercises then this bench should be your choice & Will Fulfill Your Fitness Requirements. A Combination of all gym Equipment for the Perfect Workout , It is Highly Durable and Long Lasting , A Perfect Muscle Builder In-Box Cont','type'=>'gym equipment']);
        Product::create(['name'=>'Kamachi B-003 Adjustable Weight Lifting Multi-Function Machine','price'=>10000,'image'=>'images\Products\Kamacchi B-0003 Weight Incline Bench.jpg','description'=>'It Is Made Of Heavy Duty Steel It Provides Stability And Safety For Simple Exercise This Weight Bench Will Meet Most Peoples Exercise Needs. Max. Weight Capacity: 150 Kgs','type'=>'gym equipment']);
        Product::create(['name'=>'Dolphy Foldable Sit Up Bench for Home Gym Abs Exercises','price'=>7000,'image'=>'images\Products\Dolphy Foldable Sit Uo Bench.jpg','description'=>'Sit-up Bench Adjustable Benches Sit-ups plate board Supine boards Fitness Equipment Multi functional abdomen back devices Household Light weight Strength Training Equipment Core Abdominal Trainers Standard Weight Training Benches ','type'=>'gym equipment']);
        Product::create(['name'=>'Lifeline LIT1 Steel Home Gym with Tummy Trimmer','price'=>17000,'image'=>'images\Products\Lifeline LIT1 Stell Gym set.jpg','description'=>'Multiple exercise functions: Chest extension, high pull, low pull, rowing, peck-deck, leg extension.Easy to use, space saving, no-cable-change design, total body conditioning and superior endurance with more than 18 exercise options ','type'=>'gym equipment']);



        Product::create(['name'=>'Leather Combo of FCB Bag Fitness Accessories Gym Kit','price'=>700,'image'=>'images\Products\a1.jpg','description'=>' It Is Useful As Gym Bag, Small Travel Bag, Swimming Bag.The Bag Comes In A Material Which Is Specially Chosen For Gym Purpose with PU-Leather Look And Is Long Lasting And Durable, You Can Use This Bag For Years And Will Be As Good As New. It Is Easy To Carry And Looks Very Elegant And Stylish, It Is One Stylish Companion For Your Everyday Visit To The Gym. It Is Suited For Men As Well As Women And Will Look Very Stylish With Your Gym Wear. The Bag Has A Compartment Deep Enough For You To Store Your Essential Items And Wide Enough Too','type'=>'gym accessories']);
        Product::create(['name'=>'Strauss Adjustable Weight Lifting Strap with Palm Protecting Grip','price'=>300,'image'=>'images\Products\a2.jpg','description'=>'Strauss offers the most advanced scientifically developed accessory, designed for superior lifters, unique three in one product protects hands like a glove, and functions as lifting grip, wrist wrap combination. Textured gel neoprene grip straps combined with padded, adjustable wrist support for extra comfort.','type'=>'gym accessories']);
        Product::create(['name'=>'Nivia 11041 Cotton Thumb Wrist Support','price'=>200,'image'=>'images\Products\a4.jpg','description'=>'High elasticity polyester material to allow for either a loose or snugger fit without cutting off circulation and permeability is strong.Thumb loop makes wrap around easy to put on and take off.','type'=>'gym accessories']);
        Product::create(['name'=>'Sfane Gray & Black Leather Duffel Gym Bag','price'=>320,'image'=>'images\Products\a5.jpg','description'=>'Sfane Sports Bag practical everyday sizing make it great for hauling just about anything.Big compartment holds Sports Clothing, Gloves, Shaker, Sports ball, Sports Accessories, etc. Or anything that might be wet or soiled. High quality provide years of dependable service. Made in India..','type'=>'gym accessories']);
        Product::create(['name'=>'Kobo WTA-04 Power Cotton Gym Support','price'=>300,'image'=>'images\Products\a6.jpg','description'=>'Thumb loops with extra length strap to ensure shifting does not occur when in use.Constructed from a heavy blend cotton-eglantine for maximum support.The wrist wraps use stretch fabrics to provide a great fit that can stand the wear and tear of a heavy workout.','type'=>'gym accessories']);
        Product::create(['name'=>'Kobo Leather Fitness Gloves','price'=>340,'image'=>'images\Products\a7.jpg','description'=>'Leather front palm .Padded front palm.Soft material back hand for sweat ventilation.perfect for weight lifting.','type'=>'gym accessories']);
        Product::create(['name'=>'Fitkit Classic Bottle Shaker 700ml','price'=>180,'image'=>'images\Products\a8.jpg','description'=>'Our advance design let you open the lid with just a simple push of the bottom.You can open and drink with one hand, let you stay hydrated while performing other actions.The mixer ball wire whisk— add your ingredients, drop in the FITKIT classic protein shaker mixer sports bottle, and shake','type'=>'gym accessories']);
        Product::create(['name'=>'Aprodo Weight Lifting Gym Belt','price'=>500,'image'=>'images\Products\a9.jpg','description'=>'APRODO Weight Lifting Belt are ergonomically designed to provide Firm & Comfortable Lumbar Support during any kind of Strength Training','type'=>'gym accessories']);
        Product::create(['name'=>'GOCART Tactical Gloves Military Army Shooting Gym & Fitness Gloves','price'=>500,'image'=>'images\Products\a11.jpg','description'=>'Comfortable,Breathable Design .The high-quality Nylon fabric we use is not only elastic,, high-performance Microfiber material, The knuckle part of our tactical gloves, The palm part of our tactical gloves, with wear-resistant PU liner, Nicely stitched, careful sewing breathable material and adjustable wrist design provide sense of snug and support Tactical Gloves are the perfect fit for professionals and athletes looking to increase the productivity of their training','type'=>'gym accessories']);
        Product::create(['name'=>'Izoo Latex Gym Ball','price'=>700,'image'=>'images\Products\a12.jpg','description'=>'This Izoo anti-burst ball is soft, supple, and recommended by physical therapists for rehabilitation of problem areas such as back, knees, and shoulders. Great for yoga workouts, sit up, abdominal exercises and stretching after a hard cardio or bodybuilding workout routine. ','type'=>'gym accessories']);


        Product::create(['name'=>'Pro Gym Mens Slim Fit T-Shirt','price'=>400,'image'=>'images\Products\t1.jpg','description'=>'Shop from a wide range of T-Shirt from Pro Gym. Perfect for your everyday use, you could pair it with a stylish pair of Jeans or Trousers complete the look.','type'=>'gym clothing']);
        Product::create(['name'=>'SportSoul Nylon Gym T-shirt for Men ','price'=>430,'image'=>'images\Products\t2.jpg','description'=>'SportSoul Compression Wear is a must-have whether you are a professional athlete looking to improve performance, a fitness enthusiast or just someone looking to stay fit and active','type'=>'gym clothing']);
        Product::create(['name'=>'ReDesign Apparels Nylon Redesign Compression Top Full Sleeve Tights T-Shirt','price'=>999,'image'=>'images\Products\t3.jpg','description'=>'Redesign is most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles and reduces blood lactate build up, to enhance performance and speed up recovery time. Redesign compression top increases circulation and reduces fatigue, also risk of injury ,so you can go harder for longer. Perfect for any kind of sport.','type'=>'gym clothing']);
        Product::create(['name'=>'Compression Mens Slim Fit T-Shirt','price'=>400,'image'=>'images\Products\t4.jpg','description'=>'Shop from a wide range of Compression T-Shirt from Pro Gym. Perfect for your everyday use, you could pair it with a stylish pair of Jeans or Trousers complete the look.','type'=>'gym clothing']);
        Product::create(['name'=>'Inkast Denim Jogger','price'=>800,'image'=>'images\Products\j1.jpg','description'=>'Inkast Denim Co. offers a mix of classic as well as contemporary denim styles in a variety of washes. Designed for all casual occasions, Inkast offers the authentic denim look with high emphasis on quality, craftsmanship and fit.','type'=>'gym clothing']);
        Product::create(['name'=>'Peppyzone Mens Slim Fit Trackpants','price'=>600,'image'=>'images\Products\j2.jpg','description'=>'Shop from a wide range of Trackpants from Peppyzone. Perfect for your everyday use you could pair it with a stylish t-shirt or shirt to complete the look.','type'=>'gym clothing']);
        Product::create(['name'=>'Gristones men Jogger','price'=>700,'image'=>'images\Products\j3.jpg','description'=>'Shop from a wide range of Trackpants from GRITSTONES. Perfect for your everyday use you could pair it with a stylish t-shirt or shirt to complete the look.','type'=>'gym clothing']);
        Product::create(['name'=>'Mena Regular Jogger','price'=>500,'image'=>'images\Products\j4.jpg','description'=>'Shop from a wide range of Trackpants. Perfect for your everyday use you could pair it with a stylish t-shirt or shirt to complete the look.','type'=>'gym clothing']);
        Product::create(['name'=>'Reguks Mens Shorts','price'=>400,'image'=>'images\Products\s1.jpg','description'=>'Casual Trousers made from 100% rich combed cotton, giving it a rich look, perfect fit ,Skin friendly fabric for comfort of wearing, itch-free waistband . Deep side pockets on both sides , one pocket with zipper and for better customer needs. Biowashed fabric for adding smooth and more quality to product','type'=>'gym clothing']);
        Product::create(['name'=>'Polyster Shorts','price'=>450,'image'=>'images\Products\s2.jpg','description'=>'Casual Trousers made from rich polyster, giving it a rich look, perfect fit ,Skin friendly fabric for comfort of wearing, itch-free waistband . Deep side pockets on both sides , one pocket with zipper and for better customer needs. Biowashed fabric for adding smooth and more quality to product','type'=>'gym clothing']);
        Product::create(['name'=>'Cotton Blend Shorts','price'=>550,'image'=>'images\Products\s3.jpg','description'=>'Casual Trousers made from 100% rich combed cotton, giving it a rich look, perfect fit ,Skin friendly fabric for comfort of wearing, itch-free waistband . Deep side pockets on both sides , one pocket with zipper and for better customer needs. Biowashed fabric for adding smooth and more quality to product','type'=>'gym clothing']);
        Product::create(['name'=>'Cotton Blend Shorts','price'=>590,'image'=>'images\Products\s4.jpg','description'=>'Casual Trousers made from 100% rich combed cotton, giving it a rich look, perfect fit ,Skin friendly fabric for comfort of wearing, itch-free waistband . Deep side pockets on both sides , one pocket with zipper and for better customer needs. Biowashed fabric for adding smooth and more quality to product','type'=>'gym clothing']);


        // Blogs


        // Blog::create(['name'=>'5 Benefits Of Cycling','image'=>'images\blog\bl1.jpg','date'=>'November 1,2020','brief'=>'Being healthy and maintaining an ideal weight is the ultimate goal of life, almost for everyone. We try nearly a lot many things to stay healthy – gym, yoga, exercises, walk, dance, and many more. All of them work on one of the significant rules to be physically active to be fit and healthy.','content'=>'Being healthy and maintaining an ideal weight is the ultimate goal of life, almost for everyone. We try nearly a lot many things to stay healthy – gym, yoga, exercises, walk, dance, and many more. All of them work on one of the significant rules to be physically active to be fit and healthy. Regular physical activity will assist you in protection against significant illnesses like heart diseases, obesity, cancer, mental illness, and diabetes. Among all the ways to stay healthy, one of the best ways is cycling. Cycling can be fun and has many benefits, and they are as follows:-

        // Fun and Low Impact
        // Cycling is a comparatively low-impact exercise from other forms of fitness activities. It causes less strain and injuries and is the most comfortable thing to do. Once you learn to cycle, you never forget. Cycling does not need high levels of physical skill. It is the most fun way to get fit as the adventure and buzz you get outdoors and from coasting downhills. You may want to continue cycling for a long time as it keeps you outdoors with different views, unlike other workouts that stay indoors with the same surroundings. It is healthy, pleasurable, and a low-impact form of exercise for all age groups.
        
        //  Tip – Make it fun by exploring new places and make new friends or ride with your friends.
        
         
        
        // Mental Health
        // Cycling is known to believe in curing mental health conditions such as depression, stress, and anxiety. The reason for this is due to the impact of exercise, and cycling also brings the enjoyment and excitement of riding across the streets. Since you go out for cycling, nature all around might give a better feeling and fresh oxygen to heal yourself mentally. It decreases stress levels, depression, and anxiety levels. The first battle is always in the mind that we need to win over lethargy and procrastination. There have been many studies that prove the cycling reduces the risk of Parkinson’s diseases.
        
        // Tip – Make it a regular habit to fit into your daily routine by riding to the shops, park, school, or work.
        
         
        
        // Physical Health
        // Cycling brings many physical health benefits like increased cardiovascular fitness, enhanced muscle strength and flexibility, improved joint mobility, improved posture, and coordination, strengthened bones, and decreased body fat levels. Cycling is an excellent way to control weight because it increases metabolic rate, builds muscle, and burns body fat.
        
        // Tip – People who regularly cycled or for more than 30 minutes per day had a 40 percent lower risk of getting any form of illness.
        
         
        
        // Aerobic Workout
        // Cycling means pushing pedals, which results in the aerobic exercise. This triggers the release of endorphins that is the feel-good chemical that may make you feel young at heart. It helps with everyday activities to carry over to balance, walking, standing, and endurance. It makes it easy to climb stairs and other daily activities. It is a complete body workout at one go. Cycling is the best Aerobic work out of fitness.
        
        // Tip – you should buy a cycle that puts less stress on your body, such as a beach cruiser or comfort bike.
        
         
        
        // Higher Self-esteem
        // Cycling or exercise tends to improve self-esteem. Your whole body releases a whole bunch of feel-good hormones as soon as you finish the arduous workout. This entire process increases the self-confidence that will make you feel like you can take over the world. Cycling is believed to slow the aging process and result in a longer life. According to research, people who cycle regularly tend to live longer than those who do not cycle. Other vehicles make us sit without any physical work out. Self-esteem is crucial for our overall development of a healthy body and mind.
        
        // Tip – As per the recent study, it proves that riding between just one and 60 minutes a week could cut the risk of early death by up to 23 percent.
        // ','type'=>'fitness_blog']);



        // Blog::create(['name'=>'How To Improve Your Flexibility?','image'=>'images\blog\bl2.jpg','date'=>'October 11,2020','brief'=>'Often with our hectic work schedule, our body gets stiff and loses flexibility. To be flexible means to reach down and touch the toes or bend deeply into a squat. It is the range of motion in a joint or the ability to move joints effectively through a complete range of motion.','content'=>'Often with our hectic work schedule, our body gets stiff and loses flexibility. To be flexible means to reach down and touch the toes or bend deeply into a squat. It is the range of motion in a joint or the ability to move joints effectively through a complete range of motion. But due to lack of exercise, the body stiffness increases and may create problems in the body. Therefore, it is essential to perform some activities to enhance and improve flexibility. The flexibility training includes stretching exercises to lengthen the muscles. Some of the simple exercises to strengthen the flexibility are as follows:

        //     Stretching
        //     Not everyone needs dedicated training to enhance flexibility. Some will be amazed to see the results by just a few minutes of stretching at the beginning of the day. Start performing the stretching at the end of the workout to relax muscles or improve the range of motion. There are different types of stretching to improve flexibility like static stretching, dynamic stretching, and active isolated stretching.
            
        //     Yoga
        //     It is the simplest and an ancient form to increase the flexibility in the body. You may try out different yoga poses like Hath yoga or Surya Namaskar for the complete collection. Anybody from child to old age people can do it. Yoga is the best form of exercise to keep you young and energetic, and it keeps your mind calm. It relaxes your muscles, ultimately, which is crucial for the body flexibility. Some of the yoga poses are Child’s pose, downward-facing dog, and doorway chest stretch.
            
        //     Dance
        //     Dancing comes on the top of the list to increase flexibility. Many dancers are incredibly flexible in their bodies and amazingly energetic. One of the most popular dance forms to enhance flexibility is Zumba. It is due to the entire movement of the body with all that shoulder-rolling and hip swirling along with the direction changes. Another benefit of dance is that music uplifts your mood. 
            
        //     Pilates
        //     It is considered excellent to enhance the flexibility with moves such as the saw, spine stretch, and neck pull. Pilates’ primary focus is the core, but it works everywhere from inner thighs and hips to upper back and neck. Also, there is a strong focus on a posture that can help prevent muscles from becoming overly tight and overworking.
            
        //     Massage
        //     While it is true that stretching and training increase your body flexibility, but if you incorporate massage, then it will undoubtedly be gain for your body. Massage adds an extra benefit of serving to break up knots in muscles and tissues that restrict the movement of the body parts. The body parts where the massage should be focused on are the calves, quads, IT bands, upper back, and lats.
            
        //     Relax
        //     It may sound funny or strange, but your muscles need to be relaxed and flexible. It has been proved that stress causes your body to tighten muscles into one massive ball of knots. Therefore, you should find out ways to de-stress your body and mind to relax. The pressure is the most significant cause of any diseases and muscle pain. You may rest your body just by proper deep breathing, and you could try out different breathing tricks for relaxation.
            
        //     Stay Hydrated
        //     Another simple form to enhance the flexibility is to stay hydrated as the water forms a large part of the muscle composition. To work correctly, the body must be adequately hydrated. In all your daily work schedule, don’t forget to consume more and more water. It is crucial to drink water, especially during and after hard exercise sessions, so that your muscles work optimally.
            
        //     Flexibility is essential for your body to carry out daily activities quickly. Injuries like back pain can be cured of flexibility. It is often overlooked but is a vital component of fitness. you should try out simple tricks to increase flexibility.  
        //     ','type'=>'fitness_blog']);


        // Blog::create(['name'=>'What Is Overtraining?','image'=>'images\blog\bl3.png','date'=>'July 20,2020','brief'=>'Have you ever heard of overtraining? It occurs when a person exceeds their body’s ability to build up but instead it breaks down. Most of the people do not know that they are overtraining. It is said that excess of everything is bad so is the excess of training or workout is also wrong.','content'=>'Have you ever heard of overtraining? It occurs when a person exceeds their body’s ability to build up but instead it breaks down. Most of the people do not know that they are overtraining. It is said that excess of everything is bad so is the excess of training or workout is also wrong. To find out an answer, please go through this article. Overtraining can be described as a point where a person might have to face a decrement in their performance due to a load of exercise and pressure. It is also known as chronic fatigue, burnout, and overstress in athletes. Overtraining does harm to a person as it begins to lose strength and fitness.

        // So, how do you know that you are over-training? We bring you a few signs that show that you are over-training:
        
        // Muscle Soreness
        // A person who does over-training will experience muscle soreness. Muscle Soreness is the stiffness and pain in muscles. The pain in muscles could remain several hours to days after unaccustomed or strenuous exercise.
        
        // Depression
        // The person who is over-training may feel sadness and apathy consistently or most of the time. Overtraining makes the person low make them feel sad and depressed. There will be consistent low energy and bad mood.
        
        // Variable Heart Rate
        // The person who is over-training might experience an increase in heart rate and blood pressure. Some people may have a decrease in heart rate and blood pressure.
        
        // Burnout
        // As per the health organizations, the exhaustion is a syndrome resulting from the chronic work-related stress with signs of feelings of energy depletion or increased mental distance or negativity. Burnout influences health as well as the professional efficiency of the person.
        
        // Persistent Fatigue 
        // A person who does excess of the workout will undoubtedly feel chronic fatigue as it causes changes in personality and mood. There might be a decrease in their self-esteem and motivation due to which the person may feel persistent fatigue.
        
        // There are many causes of excessive workout or overtraining. One of the reasons might be that physical exercise can be chemically addictive, just like pharmacological drugs. Addiction to anything is dangerous, and addiction is due to natural endorphins and dopamine generated and regulated by the exercise. If the over-training is not recognized at the early stage, then there might be performance issues like early onset of fatigue, decreased aerobic capacity, poor physical performance, Inability to complete workouts, and delayed recovery.
        
        // Now, there are ways to recover from over-training, and they are as follows:
        
        // A person should take a break from training to allow time to heal the body or prepare for the recovery.
        // If you still wish to continue with the workout, then at least you must reduce the intensity of the exercise.
        // The best way to recover from the over-training is to increase the number of hours of sleep.
        // You may also try splitting the training program so that different sets of muscles are worked on different days.
        // The whole-body massage is another best way to recover from over-training. You may consider getting the excellent spa once a month or in 15 days as it also reduces the stress you may be having underline in your body.
        // It would help if you also took care of your diet plan. You also, need to make sure that you must be are taking the required amount of calories in your diet.
        // It would help if you also addressed the vitamin deficiencies with additional nutritional supplements.
        // Over-training should not be taken lightly as in some of the cases, it can cause acute kidney injury and may lead to death. The clinical presentation of over-training is muscle pain, tenderness, swelling, weakness, bruising, tea Coloured Urine, fever, malaise, nausea, and confusion. So, let’s avoid overtraining and stay fit.
        // ','type'=>'fitness_blog']);



        // Blog::create(['name'=>'Cardio Exercises To Do At Home','image'=>'images\blog\bl4.jpg','date'=>'November 30,2020','brief'=>'Cardio workout is a type of exercise that increases your heart rate to improve your physical as well as mental health. We all are aware of the cardio exercises that give immense benefits to health and energy. It is needed to maintain your cardiovascular health and lose weight.','content'=>'Cardio workout is a type of exercise that increases your heart rate to improve your physical as well as mental health. We all are aware of the cardio exercises that give immense benefits to health and energy. It is needed to maintain your cardiovascular health and lose weight. The good news is that you need not spent time and money on the Gym for the cardio workouts. If you think that you would not be able to do cardio exercises at home, then you are wrong. There are plenty of cardio exercises that do not require any equipment and can be easily performed at home. 

        // We bring you the list of few cardio workouts which you can smoothly perform at home: 
        
        // Jumping Rope
        
        // For this high impact exercise, all you need is a jumping rope, a good pair of shoes, patience, and practice. It is relatively easy but one of the beneficial cardio exercises. You just need to turn a rope with handles and jump over it. If you turn the rope with a wrist instead of using arms, you will get the best results. It is believed that this exercise burns about 220 calories in 20 minutes, depending on your body weight and type.
        
        //  Tip – You could make it fun by playing some music along with jumping or chant any rhyme with it. There are various variations you could try, like Jumping on one foot, alternating feet, crossing the feet, jumping with high knees, and double turn the rope.
        
        // Dancing
        
        
        // It is one of the fun exercises, to begin with, the cardio workout. Even if you don’t know how to dance, you can try out in a closed room with YouTube videos. You may watch online dance videos for beginners. Certain dance moves help to build muscles too.
        
        //  Tip – Put on some music and dance like it is the happiest day of your life. Forget your worries, and dance like no one is watching.
        
         
        
        // Running the stairs
        
        
        // This is one of the best cardio exercises that burn fat quickly. All you need is a pair of good shoes and at least a staircase with one step. Using the stairs is an excellent cardio workout for strength training. It would be best if you make sure that there is a handrail for safety. You may also use a fitness step platform instead of actual stairs.
        
        //  Tip – Be careful and watch for kids, dogs, and cats while using a staircase for cardio exercise. No one should get hurt in between.
        
         
        
        // Jogging in Place
        
        
        // This is the most straightforward form of cardio workout, and all you need is a good pair of shoes. This exercise has a high impact, accessible and great way to warm up for more intense workouts. It is nothing but jogging in a stationary position. You could try the variations like butt kicks, high knees, wide knees, and pressing the arms overhead.
        
        //  Tip – Begin with marching at one place and slowly change the motion into the jogging movement. Just 30 to 60 seconds of jogging will boost your energy levels.
        
         
        
        // Kickboxing
        
        
        // This kind of workout means the punching, kicking, and combinations against the bag or in air. Gain basic knowledge of kicks and punches to perform this kind of cardio workout. Be aware that extending the arms and legs during the punches and kicks can stress the joints. Try various combinations like Jab-cross-hook-upper, smash front kick, jab-cross-hook-knee, squats with front kicks, jumping front kicks, or sidekicks.
        
        // Tip – On the lighter note, you may vent out your aggression through this cardio exercise. It will burn around 100 calories in 10 minutes.
        
        // Being healthy and maintaining a good body shape is not that difficult, you just need a will power to take out the time for yourself. Cardio workout is essential for strength training and maintaining good health. Everyone can easily do a cardio workout at home for good health. 
        // ','type'=>'fitness_blog']);







        // Blog::create(['name'=>'Immunity-Boosting Food ','image'=>'images\blog\nbl1.jpg','date'=>'March 4,2020','brief'=>'Fitness is the lifestyle, and there is no other alternative to good health. It is necessary to follow the discipline to have a proper diet plan and exercise. Since we all are aware of the Coronavirus spreading so quickly all around the world. The emergency health issue states that the person with strong immunity will survive the COVID19.','content'=>'Fitness is the lifestyle, and there is no other alternative to good health. It is necessary to follow the discipline to have a proper diet plan and exercise. Since we all are aware of the Coronavirus spreading so quickly all around the world. The emergency health issue states that the person with strong immunity will survive the COVID19. So it is essential to have durable protection, and here we are going to tell you about the immunity boosting food you should consume for building immunity. They are as follows:-

        // Citrus Foods
        // The most common symptom of COVID19 is cold, cough, and fever. Therefore, it is necessary to consume the food that is high in vitamin C, which are oranges, lemons, grapefruits, limes, and tangerines. You should note that your body doesn’t produce or store Vitamin C, so it is necessary to consume them daily. Oranges are always recommended for a fight with COVID19. Though all citrus foods are high in Vitamin C and the best part of this is that you can have these at any time.
        
        // Garlic
        // Garlic is considered as healthy food to fight with any diseases. It is an everyday item that can be added to any cooking. It is almost found in every cuisine in the world. Garlic is must-have in your food as it adds a little zing to food. Since the early days, garlic has been recognized in fighting infections. It helps in reducing blood pressure. Garlic’s immune-boosting properties are because it has a heavy concentration of sulfur-containing compounds, such as allicin.
        
        // Ginger
        // Cough being the standard and significant sign of COVID19 and many turns to consuming Ginger to cure cough. Some mix with honey and some would like to have ginger tea to cure cough. It may help decrease inflammation that assists in reducing a sore throat and other inflammatory illnesses. Ginger is considered as the best food to decrease nausea and cure cough.
        
        // Dark Chocolate
        // If you are a chocolate lover, then you must consume the dark chocolate as it contains an antioxidant called theobromine that helps to lift the
        // immune system by protecting the body’s cells from free radicals. Free radicals can contribute to diseases as they are the molecules that the body produces when it breaks down food.
        
        // Broccoli
        // It is necessary to consume foods that are rich in vitamins and minerals. Green vegetables are the best foods to enhance immunity in the body. Broccoli is an excellent source of vitamin C. you can add broccoli in your salad or have it as breakfast or lunch. It doesn’t take much time to cook, so it is an excellent choice to include in your food for good health.
        
        // Spinach
        // Again, the best green vegetable you can have to fight against COVID19. Spinach is not only rich in vitamin C but is also packed with various antioxidants and beta carotene. It is helpful in the infection-fighting ability of our body’s immune systems. Spinach is fittest when it’s cooked as little as conceivable so that it retains its nutrients. However, light cooking enhances its vitamin A and allows other nutrients to be released from oxalic acid. Food mustn&#39;t be overcooked.
        
        // Almonds
        // If you are not a vegetable lover, then you should consume daily almonds. You can either have it directly, or you can have almond milk, which will be best to fight against viruses and infections. All the doctors would recommend having food items rich in Vitamin E as it is key to a healthy immune system. Vitamin K is a fat-soluble vitamin, which means it requires the presence of fat to be adequately absorbed. Nuts are packed with healthy fats and vitamins. Almost all experts recommend having a cup full of Almonds for the healthy immune system.
        
        // Green Tea
        // The healthiest option is to begin the day with green tea. It is considered as excellent in the levels of epigallocatechin gallate, or EGCG, another powerful antioxidant. EGCG has been shown to increase immune function. It is also one of the best sources of amino acid, which aids in the production of germ-fighting compounds in T cells of the body.
        
        // Sunflower Seeds
        // Like we said that vitamin E is crucial in regulating and maintaining the immune system and is much needed to fight against Corona. Among all the other foods, Sunflower seeds are best as they are full of nutrients, which include phosphorous, magnesium, and vitamin B-6. They are the highest in Vitamin E, which is a powerful antioxidant.
        
        // Red Bell Peppers
        // Though many vegetables fight against infections in your body, red bell peppers are best as they contain twice vitamin c as much is contained in
        // citrus fruits.
        // ','type'=>'nutrition_blog']);




        // Blog::create(['name'=>'Adding Beans To Your Diet','image'=>'images\blog\nbl2.jpg','date'=>'April,2020','brief'=>'Adding beans to grains can turn an incomplete protein into a complete one.Beans are widespread food around the world and for good reason. They are rich in fiber, protein, and can be delicious. You might think of beans only as an ingredient in chili or baked beans, but they’re not limited to these applications – in Japan, for instance, red beans are commonly used in desserts. ','content'=>'Adding beans to grains can turn an incomplete protein into a complete one.
        // Beans are widespread food around the world and for good reason. They are rich in fiber, protein, and can be delicious. You might think of beans only as an ingredient in chili or baked beans, but they’re not limited to these applications – in Japan, for instance, red beans are commonly used in desserts. Beans are one of the best sources of fresh, complete food, plant-based protein. For people, such as athletes and seniors who might need to boost their protein intake, eating beans at most meals can be a great idea.
        // Protein is a vital nutrient that plays a key role in virtually everything the body does. Beans are high in amino acids, the building blocks of protein. Beans make an excellent source of protein for vegetarians and vegans. They are also lower in calories and saturated fat than some other protein sources, such as dairy products.
        
        // Cooked soybeans, for example, contain almost 30 grams of protein per cup! And cooked split peas and lentils have approximately 16 grams of fiber per cup. To put that into perception, many nutrition experts believe that a 150-pound person requires about 54 grams of protein and 40 grams of fiber per day. Most people in today’s world consume an excess of protein, yet only about 10-12 grams of fiber per day. Beans provide an excellent source of protein and fiber, as well as nearly a full day’s worth of iron, plus a variety of micronutrients and photochemical. The consumption of beans is also associated with a slimmer waistline and can help lower the risk of heart disease, diabetes, and some forms of cancer.
        
        // Preventing Cancer with Beans
        // There is no guarantee against cancer, but a large proportion of cancer risk is due to nutritional and lifestyle causes. Beans can help reduce the risk of many types of cancer in several ways.
        // One way is through the fiber they contain. Beans are among the foods richest in dietary fiber. Fiber is essential to help shuttle excess hormones and carcinogens out of the body. Without adequate fiber, these waste products continue to circulate over and over again, potentially causing cancer.
        
        // Beans and Weight Loss
        // If you’re looking to lose a few pounds or just maintain a healthy weight, beans are one of the best foods you can add to your diet. People who ate beans regularly have a lower risk of obesity and are more likely to have a smaller waist than people who didn’t eat beans. This is because beans are high in soluble fiber, which slows digestion and makes you feel full longer. Beans also have an extremely low glycemic index. Adding beans to your diet moderates blood sugar.
        
        // Adding beans to your diet
        // A mixed bean salad is both filling and tasty.
        // A person should always wash beans before cooking them and remove any beans that are shriveled or discolored.
        // Beans can be cooked by boiling them and allowing them to simmer until they are soft.
        // Canned beans are pre-cooked and can be used straight away in a variety of dishes.
        
        // Some simple strategies for adding beans to a regular diet include:
        // Replacing meat with beans. Try adding beans instead of meat to soups, casseroles, and pasta dishes.
        // Eating chilled bean salads. Beans are tasty and filling as a standalone salad, or as a garnish to other salads.
        // Mixing beans and grains. Adding beans to grains can turn an incomplete protein into a complete one.
        // It can take a little trial and error to find the beans that work best for someone’s preferred dishes, but beans can make a healthy addition to almost any meal.','type'=>'nutrition_blog']);



        // Blog::create(['name'=>'Training Program For Weight Gain','image'=>'images\blog\nbl3.jpg','date'=>'January 15,2020','brief'=>'As important it is to exercise so is important to take rest while you are attempting to gain weight. In most of the weight gain exercises like resistance exercises or strength training, the exercise usually tends to breakdown your muscles which then need rest to rebuild itself with added weight to give you extra muscle mass.','content'=>'Take Rest
        // As important it is to exercise so is important to take rest while you are attempting to gain weight. In most of the weight gain exercises like resistance exercises or strength training, the exercise usually tends to breakdown your muscles which then need rest to rebuild itself with added weight to give you extra muscle mass. When you rest, your body can fully concentrate on building muscles and channelize nutrients from your diet without having to worry about other demands of your body.
        
        // To rest your body, one must get full eight hours sleep. However, in the training world, this rest also signifies the rest you take between your exercise sessions. One must train each body part and then take some rest before moving on to next. Start your gym activity with one full week of gym exercise and then start your training. Then as you exercise your body to gain weight you can train your chest, shoulders, and triceps and then take some rest then move on to the back, biceps, and abs and then take some rest and then at the end workout your legs. Then this weight training is done only three times a week with one day gap in between your resistance training.
        
        // Strength Training
        // You don’t want to just add bulk of fat to your body in the name of adding mass. We all want to gain some weight which a healthier addition to our body is. In this journey of achieving healthier you, you can add strength training to your exercise routine. This will help you add muscle mass to your body rather than adding just a lump of fat. Muscle mass means that you get better metabolism for your body and get better endurance. Which means you will age with more grace. This is especially important for women as this will help them being the victim of disease like osteoporosis.
        
        // Strength training also means that you will be able to retain your muscle mass for more time which you have gained during your training, which means even if you need to take a break from your exercise, your body will retain the newer you for longer periods without much of an effort.
        
        // Some of the most common exercises for strength training are push-ups, chin-ups, leg squats, and crunches.
        // Reps also Matter
        // Most weight training are more effective when one plans the reps and sets well. It also helps you build muscle mass over time. You can start with a smaller number of reps with some rest in between and increase your number of reps over time. An endurance exercise must get to 15 reps at least over a period of one month with a usual load of 50% for each rep. This form of training helps your muscles to work for a longer period even while you are resting and help you gain better body structure over time.
        
        // Also, you must plan your intensity of training well. Weight training helps to gain weight doesn’t mean that you can sweat all day at the gym to gain weight. It takes around twenty-four hours of rest to bout the effect of muscle training for one day. So, adapt the exercise and rest well to build your muscle mass effectively.
        
        // ','type'=>'nutrition_blog']);



        // Blog::create(['name'=>'Awesome Tips To Help You Be Vegan The Right Way','image'=>'images\blog\nbl4.jpg','date'=>'June 23,2020','brief'=>'So, you are thinking of cutting off the meat and eggs from the diet Well, in that case,vegetarianism is the option that will suit you for sure. However, if going vegan is something thatyou want, then there are certain tips that are going to help you out with that particular thing as well.','content'=>'So, you are thinking of cutting off the meat and eggs from the diet Well, in that case,
        // vegetarianism is the option that will suit you for sure. However, if going vegan is something that
        // you want, then there are certain tips that are going to help you out with that particular thing as
        // well.
        
        // When it comes to having a diet that is vegan, there are certain things that you need to take care
        // of. Planning a vegan diet is something that requires certain help. That is why we are here with
        // the best of the tips to help you out with that.
        
        // Some Awesome Tips For Having A Vegan Diet
        // When it comes to veganism, you need to ensure that you follow all the tips that we have in here
        // for you. With these tips, you will be able to have the perfect vegan diet for yourself. Don’t miss
        // the chance that we have in here for you, people.
        
        // 1. Make The Vegetables The Stars
        // You need to make sure that you properly focus on the parts or food items that you can have.
        // Most people think that having a meat diet is all that they can have. However, there is nothing like
        // the vegetarian diet, believe us. There are so many amazing meals that you can have when you are
        // a vegan. The vegan meals are filled with potassium and other minerals that are useful. So, there
        // is no doubt about the fact that having vegan meals can be really helpful for the diet.
        
        // 2. Make Sure That You Include All The Foods
        // You need to have all the nutrients in the diet that you have. So, you need to make sure that you
        // eat a particularly balanced diet. There should be a number of healthy foods that are present in the
        // diet. You will get fiber and protein from the beans. Also, the greens are present there for the
        // Vitamins as well. So, why not have a vegan diet to make sure that you get all the ingredients that
        // you need. This will certainly be a great thing for sure.
        
        // 3. Select The Whole Grains
        
        // You don’t have to get white bread and white pasta. You need to have whole grains as well. These
        // are some of the most important ingredients to have in the amazing diet that you have. So, choose
        // the brown rice that will give you all these ingredients, to begin with. Vitamin B is also very
        // important if you to want to have a vegan diet planned out for you. Make sure that you get the
        // whole grains because these will be able to provide you with a means that can help you lose the
        // weight that you have already gained.
        
        // 4. Plant-Based Proteins Are Enough
        // For the vegans out there, having a plant-based diet is enough. You need to make sure that you
        // have a healthy meal if you are a vegan. The sources of protein such as cheese and meat are the
        // ones that are perfectly well for a vegan person.
        // For those who are vegan, things such as tofu, edamame, and so many others can provide the
        // protein to the people who can have it as well.
        // You can also have nuts such as sunflower seeds that can provide the much-needed intake of
        // protein for you.
        
        // 5. Vegan Products Are Really Healthy
        // The cookies that you have when you are vegan are certainly healthy for the waistline. Also, the
        // garlic bread that is made with vegan margarine is not really a great thing for the heart for sure.
        // Sure, it is made of butter. So, how can it be healthy right? This is something that you have to
        // make sure that you know. The vegan diet is not necessarily healthy.
        
        // 6. Vitamin D Is Important
        // You might think that the canned fish dishes will be able to provide you with the Vitamin D.
        // Fishes such as sardines and salmon will be able to provide you with that Vitamin. However, for a
        // vegan, a great source of Vitamin D would be almond or soy milk. This is something that the
        // vegans have to keep in mind.
        
        // So, these are some of the tips that we have for you here. Keep these tips in mind if you want to
        // become a proper vegan.
        // ','type'=>'nutrition_blog']);



        // Blog::create(['name'=>'Lose Weight With High-Intensity Interval Training ','image'=>'images\blog\wlb1.jpeg','date'=>'November 1,2020','brief'=>'Do you want to lose weight and that too rapidly? In that case, you might want to try something known as the high-intensity interval training or HIIT which is one of the best forms of workout that people tend to go for most of the time. In this method of workout','content'=>'Do you want to lose weight and that too rapidly? In that case, you might want to try something known as the high-intensity interval training or HIIT which is one of the best forms of workout that people tend to go for most of the time. In this method of workout, the people will have intense periods of heavy workouts and then have some fixed periods of the less-intensity workouts as well.     

        // In some cases, people even tend to rest after the heavy intensity workout. So, this is something that is going to be a great help when it comes to fat burning in the best way. Now, most people might think that it is pretty simple but it is definitely tougher than you might think. When we are talking about high-intensity interval training, there are certain benefits that people can get. Here we are going to talk a little bit about it. 
        
        // Some Benefits of High-Intensity Interval Training   
        // Here we are going to mention some of the best benefits that you might often get with the HIIT or the Heavy Intensity Interval Training in the best way. With the help of this training form, you can lose weight in the best way. So, let us have a discussion about it a little bit. 
        
        // Efficiency 
        // This is one of the main benefits that you will find with the amazing HIIT workout option. The efficient technique of working out is pretty efficient and you will get to lose some weight for sure. In case you have a busy schedule, then there is a chance that you will be able to squeeze in some time for the workout session and that too without any difficulty. So, why don’t you go ahead and try that out right now? 
        
        // Increased Fat Burning 
        // Another one of the main benefits that one can get with the help of HIIT or High-Intensity Interval Training is that it is going to be a great help when it comes to increasing the fat burning of the body. Not only are you able to burn the calories but then the effectiveness of the training is something that will make you lose a lot of fat for sure. That is one of the main reasons why people tend to try this amazing workout for sure. 
        
        // Having A Healthy Heart 
        // There are so many people who suffer from certain heart issues and that is all due to the overweight. With the help of this amazing HIIT or High-Intensity Interval training, people can actually make sure that they are able to lose some weight and hence will have a healthier heart. So, there is simply not a single speck of doubt about the fact that this is going to help a lot when it comes to dealing with heart problems. This is one of the most important things that you have to keep in mind when you are doing the amazing high-intensity interval training for your body. 
        
        // Losing Weight Gaining Muscle 
        // One concern that people always tend to have when they are working out is that while they get to lose their weight, they also end up losing all the muscle strength that they have in some cases. Well, this is something that you don’t have to worry about when you are doing the amazing HIIT workout for sure. You will end up burning all the fat but not the muscles and that is one of the perks.
        
        // So, these are some of the best things that you need to know about HIIT. Make a plan to workout today and have the best benefits of High-Intensity Interval Training. 
        // ','type'=>'weight_loss_blog']);



        // Blog::create(['name'=>'8 Ways To Achieve Weight Loss Goals – Weight Loss Training Program','image'=>'images\blog\wlb2.png','date'=>'August 20,2020','brief'=>'Avoid consuming sugar more than required. Skip eating cakes, pastries, and chocolates.Say no to alcohol. A minimal intake will do no harm. But when it exceeds, then alcohol slows down the digestion process.Do not eat fried snacks.Do not eat packaged food.','content'=>'1. Plan Your Weight Training Well
        // Before you hit the best place to lose weight, which, of course, is the “gym,” plan out your weight loss training program. Write it out in a diary about how you want to achieve your weight training process. Write step-by-step goals to achieve it.  
        
        //    2. Keep Micro-Goals in Your Weight Loss Training Program
        // Your weight loss training program is not a short-term goal. No, it shouldn’t be that way. You will end up ruining your body than doing it any good. Go slow! Take baby steps! Weight training is something that has to be followed for a lifetime. Keep micro-goals. Take it one at a time. Practice hard to complete it before taking the next lead.
        
        //    3. Dietary Chart for Weight Training
        // What if we said that the kitchen is the best place to lose weight? The core of achieving weight loss is sensible eating. The first step is to make of list of what you have on a regular basis. Check the foods that have led to weight gain. So, how do you alter your diet? If possible, visit your dietitian or a nutritionist. They will help to prepare a diet chart during the course of your weight loss training program. Prepare a rule chart to avoid eating foods that aid weight gain and are unhealthy. In the same way, include healthy foods.
        
        // Avoid consuming sugar more than required. Skip eating cakes, pastries, and chocolates.
        // Say no to alcohol. A minimal intake will do no harm. But when it exceeds, then alcohol slows down the digestion process.
        // Do not eat fried snacks.
        // Do not eat packaged food.
        // Eat fresh fruits and vegetables.
        // Prepare food fresh at home.  
        // Drink lots of water. Water improves body’s metabolism and helps the body to energize faster.
        // Your diet is quintessential in making your weight training a success. Of course, the best place to lose weight is the gym, but it starts from the kitchen!
        
        //    4. Be Disciplined in the Course of Your Weight Loss Training Program
        // Discipline is a golden habit that will help you in your weight loss training program. The issue is all with the mind. Be mentally focused when you start out on your weight training. No points for guessing right that GYM is the best place to lose weight. But, do you know that, it is the GYM that provides you the necessary motivation also to lose weight? It is all a mind game! If you are motivated, you would certainly do it! Else those bulges will become your way of life! Yes, do not skip going to the gym and exercising. The longer you continue to work out, the stronger will be your discipline and motivation.
        
        //    5. If Not the Gym, Then Elsewhere; but Be Keen on Losing Weight and Staying Active
        // With hectic life routines, sometimes it becomes impossible to go to the gym. But, that shouldn’t deter you from skipping your weight loss training program. So, then your office or home becomes the best place to lose weight. Achieve your weight training in the confines of your home or office. Some quick exercises when you sit or a long stroll in the corridor of your office will do the trick. If you are motivated, then you need not be worried about your weight loss training program. The goal is to stay fit and active always by whatever means, even if it means not going to the gym.
        
        //    6. Hit the GYM! The Best Place to Lose Weight!
        // A winning spirit is when you push your own boundaries. Practice hard. Weight training should be a continuous process. You need to commit one hundred percent to the weight loss training program. Ensure that there are no excuses for not working out. Here, the best place to lose weight is in your programmed mind. Train your mind not to accept excuses. Train your mind that you practice hard on your weight training, no matter what the circumstances.   
        
        //    7. Weight Loss Training Program Requires a Strong Support System
        // Many-a-times, the weight loss training program becomes too tough a task to handle. When you feel that it is taking you nowhere, rely on a good support system. Mix with like-minded people in your gym and work together on common goals. Talk to your friends and family about it. They will always support you in your weight training process. The best place to lose weight is in the company of a support system? It is sure that you also couldn’t agree more on this!
        
        //    8. Focus on Your Health while Doing Your Weight Training
        // Your health should be your focus when you are in for a weight loss training program. You can go ahead with your weight loss goals only when you are healthy. Weight training requires that you have a disciplined mind and a healthy body. So before you reach the best place to lose weight, try to maintain a healthy body with a healthy mind.
        
        //  For the ultimate weight loss training program, develop habits that promote your weight training. Cultivate a disciplined mind and a healthy body. Hit it out in the gym every day. You cannot achieve it overnight. But, never think it is impossible. Let the weight loss training program be a continuous process. Once you achieve your weight loss goals, you can finally say “Yes, I did it!”','type'=>'weight_loss_blog']);




        // Blog::create(['name'=>'Weight Loss Training Program Should Suit Your Body For Faster Results','image'=>'images\blog\wlb3.jpg','date'=>'May 1,2020','brief'=>'A Good Weight Loss Training Program Is the Trick to Stay Fit! Every time you look in the mirror, you promise yourself that you will start exercising to kick out that extra flab from your body and come in shape again.','content'=>'A Good Weight Loss Training Program Is the Trick to Stay Fit!
        // Every time you look in the mirror, you promise yourself that you will start exercising to kick out that extra flab from your body and come in shape again. But that is just it. The next minute, you forget about your weight loss training program and just go about your normal routine.
        
        // Boot Camps Might be High on Promises but Are Low on Results
        // The most common mistake that you have to avoid is joining boot camp weight loss sessions that promise immediate results. These programs give strenuous weight training exercises that may cause injury to your body. They make tall claims but all fall flat when it comes to delivering the results. Contrary to the weight loss training program, you will end up gaining weight once you get back to your normal life after completing the boot camp training.
        
        // Choose the Gym Where Personal Training Is provided
        // Your initial step would be to enroll in a good gym where personal training for weight loss is provided. The weight training at the gym will ensure that your exercises are regular and adequate for the body. The personal training provided at the gym will ensure that your weight training is according to your body requirement and nothing in excess. Also, good gyms ensure that they alter your diet regimen and exercise schedule every now and then to keep the metabolic process active at all times.   
        
        // Stay Motivated for Your Weight Loss Training Program
        // The most necessary step to continue your weight loss training program is discipline and motivation. Remember that there is no wonder pill to lose weight. It has to be a gradual and step-by-step effort. Many-a-times, you find that your current weight loss training program is challenging and arduous. Then, seek the help of an expert hand to move on and achieve your motivation. Personal training will ensure variations in your weight training schedule that will bring innovation and the much-required change to keep you motivated to do better.
        
        // Appropriate Weight Training to Aid Faster Weight Loss Results
        // There are many diet plans out there that are efficient. But, a good weight loss training program should teach you the fundamentals of exercise and an appropriate diet for you. The finest weight loss training program should be designed to cater for precisely what your body needs and can take. The correct blend of aerobics, cardio, and weight training improves your endurance level and keeps you healthy and fit. It helps you burn out that fat at a faster rate and tones your muscles.
        
        // Physical Personal Training for Losing Weight
        // There are many good gyms out there. But make sure that your gym has qualified and experienced instructors. The personal training goes a long way in delivering appropriate results of your weight loss training program. The personal instructor will know which form of training is good for you or why it is not good for you. They will determine what you should eat and what weight training you should do based on your body structure and composition.
        
        // Go for Healthy Weight Loss and Not Just Weight Loss!
        // A good weight loss training program should educate you on the essentials of proper diet and exercise. There are plenty of programs that promise results but fail to deliver. Proper personal training is a necessity and not a luxury. Try weight training that strengthens your muscles and not injures them. Take proper steps and do everything consistently. Stick to the weight loss training program that works for you and you are bound to see amazing results in the long run.
        
        // ','type'=>'weight_loss_blog']);

        // Blog::create(['name'=>'10 Changes In Diet To Lose Weight','image'=>'images\blog\wlb4.png','date'=>'November 19,2020','brief'=>'People make a lot of effort to reduce weight. There are different ways to lose weight, and one of the sources to reduce is the proper diet.We bring you the following changes to make in your diet plan to lose weight','content'=>'','type'=>'weight_loss_blog']);



    }
}
