<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use DB;
class ListingController extends Controller
{
    //
    public function index()
    {
        // Durumu aktif olan en yeni ilanları, N+1 yapmadan, sayfa başı 12 tane olacak şekilde çekiyoruz
        $listings = Listing::with(['user', 'category'])
            ->where('status', 'active')
            ->latest()
            ->paginate(6);

        return view('pages.listings_index', compact('listings'));
    }

    public function show(Listing $listing)
    {
        // Session'dan daha önce görüntülenen ilanların array'ini al, yoksa boş array dön
        $viewedListings = session()->get('viewed_listings', []);

        // Eğer bu ilan id'si session'da yoksa (kullanıcı ilk defa bakıyorsa)
        if (!in_array($listing->id, $viewedListings)) {
            // Veritabanındaki izlenme sayısını 1 arttır
            DB::table('listings')->where('id', $listing->id)->increment('views');

            // Bu ilan id'sini session'a push'la ki sayfayı yenileyince tekrar artmasın
            session()->push('viewed_listings', $listing->id);

            // Mevcut nesnenin de içindeki sayıyı elinle 1 arttır ki sayfada anında güncel gözüksün
            $listing->views += 1;
        }

        // Detay sayfasında "Benzer İlanlar" göstermek istersen alt yapı hazır olsun kanka:
        $relatedListings = Listing::where('category_id', $listing->category_id)
            ->where('id', '!=', $listing->id) // Mevcut ilanın kendisini listeden çıkar
            ->where('status', 'active')
            ->latest()
            ->take(4) // 4 tane benzer ilan getir
            ->get();

        return view('pages.listings_show', compact('listing', 'relatedListings'));
    }

}
