public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('author');
        $table->text('description')->nullable();
        $table->date('published_at')->nullable();
        $table->timestamps();
    });
}
