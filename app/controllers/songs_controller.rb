class SongsController < ApplicationController
  # GET /songs
  # GET /songs.xml
  def index
    @songs = Songs.all

    respond_to do |format|
      format.html # index.html.erb
      format.xml  { render :xml => @songs }
    end
  end

  # GET /songs/1
  # GET /songs/1.xml
  def show
    @songs = Songs.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.xml  { render :xml => @songs }
    end
  end

  # GET /songs/new
  # GET /songs/new.xml
  def new
    @songs = Songs.new

    respond_to do |format|
      format.html # new.html.erb
      format.xml  { render :xml => @songs }
    end
  end

  # GET /songs/1/edit
  def edit
    @songs = Songs.find(params[:id])
  end

  # POST /songs
  # POST /songs.xml
  def create
    @songs = Songs.new(params[:songs])

    respond_to do |format|
      if @songs.save
        flash[:notice] = 'Songs was successfully created.'
        format.html { redirect_to(@songs) }
        format.xml  { render :xml => @songs, :status => :created, :location => @songs }
      else
        format.html { render :action => "new" }
        format.xml  { render :xml => @songs.errors, :status => :unprocessable_entity }
      end
    end
  end

  # PUT /songs/1
  # PUT /songs/1.xml
  def update
    @songs = Songs.find(params[:id])

    respond_to do |format|
      if @songs.update_attributes(params[:songs])
        flash[:notice] = 'Songs was successfully updated.'
        format.html { redirect_to(@songs) }
        format.xml  { head :ok }
      else
        format.html { render :action => "edit" }
        format.xml  { render :xml => @songs.errors, :status => :unprocessable_entity }
      end
    end
  end

  # DELETE /songs/1
  # DELETE /songs/1.xml
  def destroy
    @songs = Songs.find(params[:id])
    @songs.destroy

    respond_to do |format|
      format.html { redirect_to(songs_url) }
      format.xml  { head :ok }
    end
  end
end
