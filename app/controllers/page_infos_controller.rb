class PageInfosController < ApplicationController
  # GET /page_infos
  # GET /page_infos.xml
  def index
    @page_infos = PageInfo.all

    respond_to do |format|
      format.html # index.html.erb
      format.xml  { render :xml => @page_infos }
    end
  end

  # GET /page_infos/1
  # GET /page_infos/1.xml
  def show
    @page_info = PageInfo.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.xml  { render :xml => @page_info }
    end
  end

  # GET /page_infos/new
  # GET /page_infos/new.xml
  def new
    @page_info = PageInfo.new

    respond_to do |format|
      format.html # new.html.erb
      format.xml  { render :xml => @page_info }
    end
  end

  # GET /page_infos/1/edit
  def edit
    @page_info = PageInfo.find(params[:id])
  end

  # POST /page_infos
  # POST /page_infos.xml
  def create
    @page_info = PageInfo.new(params[:page_info])

    respond_to do |format|
      if @page_info.save
        flash[:notice] = 'PageInfo was successfully created.'
        format.html { redirect_to(@page_info) }
        format.xml  { render :xml => @page_info, :status => :created, :location => @page_info }
      else
        format.html { render :action => "new" }
        format.xml  { render :xml => @page_info.errors, :status => :unprocessable_entity }
      end
    end
  end

  # PUT /page_infos/1
  # PUT /page_infos/1.xml
  def update
    @page_info = PageInfo.find(params[:id])

    respond_to do |format|
      if @page_info.update_attributes(params[:page_info])
        flash[:notice] = 'PageInfo was successfully updated.'
        format.html { redirect_to(@page_info) }
        format.xml  { head :ok }
      else
        format.html { render :action => "edit" }
        format.xml  { render :xml => @page_info.errors, :status => :unprocessable_entity }
      end
    end
  end

  # DELETE /page_infos/1
  # DELETE /page_infos/1.xml
  def destroy
    @page_info = PageInfo.find(params[:id])
    @page_info.destroy

    respond_to do |format|
      format.html { redirect_to(page_infos_url) }
      format.xml  { head :ok }
    end
  end
end
