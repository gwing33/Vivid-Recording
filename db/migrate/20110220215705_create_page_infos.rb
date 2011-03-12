class CreatePageInfos < ActiveRecord::Migration
  def self.up
    create_table :page_infos do |t|
      t.string :unique_id
      t.string :name
      t.text :page_data
      t.string :type

      t.timestamps
    end
  end

  def self.down
    drop_table :page_infos
  end
end
