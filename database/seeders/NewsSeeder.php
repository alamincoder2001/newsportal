<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\News;
use Illuminate\Support\Str;
use App\Models\NewsPublished;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $image = ['2023000001', '2023000002', '2023000003', '2023000004', '2023000005', '2023000006', '2023000007', '2023000008', '2023000009', '2023000010', '2023000011'];
        $heading = ['ক্যামেরার সামনে ফিরতেই রিয়ার চ্যালেঞ্জ', 'বলিউড অভিনেতা সুশান্ত সিং রাজপুতের মৃত্যুর', 'অভিনেতার মৃত্যুর পর হাজতবাস হয় রিয়া চক্রবর্তীর', 'এবার স্ব-মহিমায় ফিরছেন তিনি', 'শান্তের মৃত্যুর পর ক্রমাগত কটাক্ষের মুখে পড়তে হয়।', 'বদলে যাচ্ছে গ্যাং লিডাররাও শুধু থাকছেন প্রিন্স নারুলা।', 'বিজিবি মহাপরিচালকের ঘুমধুম সীমান্ত পরিদর্শন এবং বিজিপির সাথে শুভেচ্ছা বিনিময়', 'বর্ডার গার্ড বাংলাদেশ (বিজিবি) এর মহাপরিচালক মেজর জেনারেল এ কে এম নাজমুল হাসান', 'পরিদর্শনকালে বিজিবি মহাপরিচালক বাংলাদেশ', 'মিয়ানমারের সীমান্তরক্ষী বাহিনীর মধ্যে দ্বিপাক্ষিক সম্পর্ক', 'উন্নয়ন ও পারস্পরিক সৌহার্দ্য বৃদ্ধির লক্ষ্যে', 'বিজিবি মহাপরিচালক আসন্ন চৈত্র সংক্রান্তি, পহেলা বৈশাখ', 'বিজিবির বিভিন্ন ইউনিটের অপারেশনাল', 'পরিদর্শনকালে বিজিবি মহাপরিচালক সকল পর্যায়ের', 'তাদের সাথে ফটোসেশনে অংশগ্রহণ করেন', 'কক্সবাজার রিজিয়নের আওতাধীন রামু', 'অধীনস্থ ঘুমধুম বিওপি পরিদর্শন করেন', 'তাপমাত্রা ৪২ ডিগ্রিতে ওঠার আশঙ্কা', 'দেশের অধিকাংশ জেলার ওপর দিয়ে', 'দেশের উপর দিয়ে চলমান মৃদু', 'পশ্চিমা লঘুচাপের বর্ধিতাংশ পশ্চিমবঙ্গ', 'সকাল পর্যন্ত অস্থায়ীভাবে আংশিক', 'মেঘলা আকাশসহ সারাদেশের আবহাওয়া', 'ধরনের তাপ প্রবাহ বয়ে যাচ্ছে ', 'গরমে জনজীবন দুর্বিষহ হয়ে উঠেছে।', 'ঢাকাসহ সারাদেশেই মানুষ গরমে কষ্ট পাচ্ছেন', 'আগামী কয়েকদিনে তাপমাত্রা বেড়ে', 'ডিগ্রি সেলসিয়াস পার হয়ে তাপপ্রবাহ তীব্র আকার'];

        foreach (range(1, 500) as $key => $value) {

            $uniqueId = $this->getUniqueId();
            $title = $heading[rand(0, 25)];
            $name = $image[rand(0, 10)] . '.jpg';

            $news = News::create([
                'unique_id'    => $uniqueId,
                'title'        => $title,
                'subtitle'     => $title,
                'slug'         => $this->make_slug($uniqueId . date('His')),
                'description'  => '<p>পূর্ব সিরিয়ায় মার্কিন ঘাঁটিতে রকেট হামলা হয়েছে। ওই ঘাঁটিতে&nbsp;যুক্তরাষ্ট্রের সেনারা থাকে। মার্কিন সেনাবাহিনী এই হামলার তথ্য জানিয়েছে। তবে হামলায়&nbsp;কোনো হতাহত কিংবা ক্ষয়ক্ষতি হয়নি বলে জানানো হয়েছে।</p><p>যুক্তরাষ্ট্রের সেনাবাহিনী এক বিবৃতিতে বলেছে,&nbsp;সোমবার পূর্ব সিরিয়ার মিশন সহায়ক সাইট কনোকোতে একটি রকেট আঘাত হানে। আরেকটি রকেট পাওয়া যায় অ্যাটাক পয়েন্টে। তবে কেউ হামলার দায় স্বীকার করেনি।</p><p>যুক্তরাজ্যভিত্তিক যুদ্ধপর্যবেক্ষণ সংস্থা সিরিয়ান অবজারভেটরি ফর হিউম্যান রাইটস বলেছে, ‘পূর্ব সিরিয়ায় অবস্থান করা ইরান সমর্থিত যোদ্ধারা এই হামলা চালাতে পারে।’</p><p>&nbsp;</p><p>গত মার্চে সিরিয়ার মার্কিন ঘাঁটিতে ড্রোন&nbsp;হামলায় একজন ঠিকাদারসহ দুইজন নিহত হয়। ঘটনার পর প্রতিশোধমূলক বিমান হামলা চালায় যুক্তরাষ্ট্র</p><p>ওই হামলার পর&nbsp;মার্কিন প্রতিরক্ষামন্ত্রী লয়েড অস্টিন বলেছিলেন, প্রেসিডেন্ট জো বাইডেনের নির্দেশে ইরানের ইসলামিক বিপ্লবী গার্ড বাহিনীর সঙ্গে সম্পর্কিত গোষ্ঠীর লক্ষ্যবস্তুতে হামলা চালানো হয়। অস্টিন বলেন, ‘আমাদের সেনাদের ওপর হামলা চালানোর পর কেউ দায়মুক্তি পাবে না।</p>',
                'user_id'      => 1,
                'is_published' => 'active',
                'is_archive'   => 'no',
                'image'        => '/uploads/news/' . $name,
                'thumbnail'    => '/uploads/thumbnail/' . $name,
            ]);


            NewsPublished::create([
                'news_id'     => $news->id,
                'category_id' => rand(1, 21)
            ]);
        }
    }

    function getUniqueId()
    {
        $lastNewsId = News::select('unique_id')->orderBy('unique_id', 'Desc')->take('1')->get();

        if (count($lastNewsId) > 0) {
            return $lastNewsId[0]->unique_id + 1;
        } else {
            return date('Y') . '000001';
        }
    }
    function make_slug($string)
    {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
