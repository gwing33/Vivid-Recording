require 'test_helper'

class SongsControllerTest < ActionController::TestCase
  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:songs)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create songs" do
    assert_difference('Songs.count') do
      post :create, :songs => { }
    end

    assert_redirected_to songs_path(assigns(:songs))
  end

  test "should show songs" do
    get :show, :id => songs(:one).to_param
    assert_response :success
  end

  test "should get edit" do
    get :edit, :id => songs(:one).to_param
    assert_response :success
  end

  test "should update songs" do
    put :update, :id => songs(:one).to_param, :songs => { }
    assert_redirected_to songs_path(assigns(:songs))
  end

  test "should destroy songs" do
    assert_difference('Songs.count', -1) do
      delete :destroy, :id => songs(:one).to_param
    end

    assert_redirected_to songs_path
  end
end
