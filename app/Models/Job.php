<?
namespace App\Models;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model{
    use HasFactory;
   protected $table = 'job_listenings';
   protected $fillable = [
    'title',
    'salary'
   ];

   //$job->tags;

   public function tags(){
    return $this->belongsToMany(Tag::class, foreignPivotKey:'job_listenings_id');
   }
   public function employer(){
    return $this->belongsTo(Employer::class); // many Jobs can have one Employer
   }
}
