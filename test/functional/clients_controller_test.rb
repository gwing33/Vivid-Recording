require 'test_helper'

class ClientsControllerTest < ActionController::TestCase
  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:clients)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create clients" do
    assert_difference('Clients.count') do
      post :create, :clients => { }
    end

    assert_redirected_to clients_path(assigns(:clients))
  end

  test "should show clients" do
    get :show, :id => clients(:one).to_param
    assert_response :success
  end

  test "should get edit" do
    get :edit, :id => clients(:one).to_param
    assert_response :success
  end

  test "should update clients" do
    put :update, :id => clients(:one).to_param, :clients => { }
    assert_redirected_to clients_path(assigns(:clients))
  end

  test "should destroy clients" do
    assert_difference('Clients.count', -1) do
      delete :destroy, :id => clients(:one).to_param
    end

    assert_redirected_to clients_path
  end
end
