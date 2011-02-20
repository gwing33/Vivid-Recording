require 'test_helper'

class PageInfosControllerTest < ActionController::TestCase
  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:page_infos)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create page_info" do
    assert_difference('PageInfo.count') do
      post :create, :page_info => { }
    end

    assert_redirected_to page_info_path(assigns(:page_info))
  end

  test "should show page_info" do
    get :show, :id => page_infos(:one).to_param
    assert_response :success
  end

  test "should get edit" do
    get :edit, :id => page_infos(:one).to_param
    assert_response :success
  end

  test "should update page_info" do
    put :update, :id => page_infos(:one).to_param, :page_info => { }
    assert_redirected_to page_info_path(assigns(:page_info))
  end

  test "should destroy page_info" do
    assert_difference('PageInfo.count', -1) do
      delete :destroy, :id => page_infos(:one).to_param
    end

    assert_redirected_to page_infos_path
  end
end
