class Club extends Model
{
    /**
     * Touches (touch parent model when this model changes)
     */
    protected $touches = ['members'];

    /**
     * Member relation (many to one)
     */
    public function members()
    {
        return $this->belongsTo('App\Club');
    }
}
