# Be sure to restart your server when you modify this file.

# Your secret key for verifying cookie session data integrity.
# If you change this key, all old sessions will become invalid!
# Make sure the secret is at least 30 characters and all random, 
# no regular words or you'll be exposed to dictionary attacks.
ActionController::Base.session = {
  :key         => '_trunk_session',
  :secret      => '4c02b6b313bf786960e899b8442b513bb92305ea4e0b6ce48d0f963607c2c64989bc9e29df795e40c7505789c9b0f6ff4f9f24a067347089c88c9e8e5d8f00b1'
}

# Use the database for sessions instead of the cookie-based default,
# which shouldn't be used to store highly confidential information
# (create the session table with "rake db:sessions:create")
# ActionController::Base.session_store = :active_record_store
