class CreateSongs < ActiveRecord::Migration
  def self.up
    create_table :songs do |t|
      t.string :name
      t.integer :file_size
      t.integer :album_id
      t.string :length

      t.timestamps
    end
  end

  def self.down
    drop_table :songs
  end
end
