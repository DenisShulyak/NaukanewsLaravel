<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace LaravelIdea\Helper\App\Models {

    use Illuminate\Notifications\Notification;
    use Laravel\Passport\Token;
    
    /**
     * @method _IH_Post_C refresh()
     * @method _IH_Post_C update(array $attributes = [], array $options = [])
     * @method _IH_Post_C save(array $options = [])
     * @method _IH_Post_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Post_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Post_C touch()
     * @method _IH_Post_C fill(array $attributes)
     * @method _IH_Post_C delete()
     */
    class _IH_Post_CP {}
    
    /**
     * @property _IH_User_C|mixed $id
     * @property _IH_User_C|mixed $name
     * @property _IH_User_C|mixed $email
     * @property _IH_User_C|mixed $email_verified_at
     * @property _IH_User_C|mixed $password
     * @property _IH_User_C|mixed $remember_token
     * @property _IH_User_C|mixed $created_at
     * @property _IH_User_C|mixed $updated_at
     * @method _IH_User_C notifyNow($instance, array $channels = null)
     * @method _IH_User_C notify($instance)
     * @method _IH_User_C routeNotificationFor(string $driver, Notification|null $notification = null)
     * @method _IH_User_C readNotifications()
     * @method _IH_User_C unreadNotifications()
     * @method _IH_User_C tokens()
     * @method _IH_User_C createToken(string $name, array $scopes = [])
     * @method _IH_User_C clients()
     * @method _IH_User_C tokenCan(string $scope)
     * @method _IH_User_C token()
     * @method _IH_User_C withAccessToken(Token $accessToken)
     * @method _IH_User_C sendEmailVerificationNotification()
     * @method _IH_User_C getEmailForVerification()
     * @method _IH_User_C markEmailAsVerified()
     * @method _IH_User_C hasVerifiedEmail()
     * @method _IH_User_C getRememberTokenName()
     * @method _IH_User_C getAuthPassword()
     * @method _IH_User_C getAuthIdentifierForBroadcasting()
     * @method _IH_User_C getAuthIdentifier()
     * @method _IH_User_C getRememberToken()
     * @method _IH_User_C setRememberToken(string $value)
     * @method _IH_User_C getAuthIdentifierName()
     * @method _IH_User_C can(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C canAny(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C cant(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C cannot(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C sendPasswordResetNotification(string $token)
     * @method _IH_User_C getEmailForPasswordReset()
     * @method _IH_User_C refresh()
     * @method _IH_User_C update(array $attributes = [], array $options = [])
     * @method _IH_User_C save(array $options = [])
     * @method _IH_User_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_User_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_User_C touch()
     * @method _IH_User_C fill(array $attributes)
     * @method _IH_User_C delete()
     */
    class _IH_User_CP {}
}

namespace LaravelIdea\Helper\Illuminate\Notifications {
    
    /**
     * @property _IH_DatabaseNotification_C|mixed $notifiable
     * @method _IH_DatabaseNotification_C markAsRead()
     * @method _IH_DatabaseNotification_C read()
     * @method _IH_DatabaseNotification_C markAsUnread()
     * @method _IH_DatabaseNotification_C unread()
     * @method _IH_DatabaseNotification_C refresh()
     * @method _IH_DatabaseNotification_C update(array $attributes = [], array $options = [])
     * @method _IH_DatabaseNotification_C save(array $options = [])
     * @method _IH_DatabaseNotification_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_DatabaseNotification_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_DatabaseNotification_C touch()
     * @method _IH_DatabaseNotification_C fill(array $attributes)
     * @method _IH_DatabaseNotification_C delete()
     */
    class _IH_DatabaseNotification_CP {}
}

namespace LaravelIdea\Helper\Laravel\Passport {
    
    /**
     * @property _IH_AuthCode_C|mixed $id
     * @property _IH_AuthCode_C|mixed $user_id
     * @property _IH_AuthCode_C|mixed $client_id
     * @property _IH_AuthCode_C|mixed $scopes
     * @property _IH_AuthCode_C|mixed $revoked
     * @property _IH_AuthCode_C|mixed $expires_at
     * @method _IH_AuthCode_C client()
     * @method _IH_AuthCode_C getConnectionName()
     * @method _IH_AuthCode_C refresh()
     * @method _IH_AuthCode_C update(array $attributes = [], array $options = [])
     * @method _IH_AuthCode_C save(array $options = [])
     * @method _IH_AuthCode_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_AuthCode_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_AuthCode_C touch()
     * @method _IH_AuthCode_C fill(array $attributes)
     * @method _IH_AuthCode_C delete()
     */
    class _IH_AuthCode_CP {}
    
    /**
     * @property _IH_Client_C|mixed $id
     * @property _IH_Client_C|mixed $user_id
     * @property _IH_Client_C|mixed $name
     * @property _IH_Client_C|mixed $secret
     * @property _IH_Client_C|mixed $provider
     * @property _IH_Client_C|mixed $redirect
     * @property _IH_Client_C|mixed $personal_access_client
     * @property _IH_Client_C|mixed $password_client
     * @property _IH_Client_C|mixed $revoked
     * @property _IH_Client_C|mixed $created_at
     * @property _IH_Client_C|mixed $updated_at
     * @method _IH_Client_C tokens()
     * @method _IH_Client_C user()
     * @method _IH_Client_C firstParty()
     * @method _IH_Client_C skipsAuthorization()
     * @method _IH_Client_C getConnectionName()
     * @method _IH_Client_C getIncrementing()
     * @method _IH_Client_C getKeyType()
     * @method _IH_Client_C confidential()
     * @method _IH_Client_C authCodes()
     * @method _IH_Client_C refresh()
     * @method _IH_Client_C update(array $attributes = [], array $options = [])
     * @method _IH_Client_C save(array $options = [])
     * @method _IH_Client_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Client_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Client_C touch()
     * @method _IH_Client_C fill(array $attributes)
     * @method _IH_Client_C delete()
     */
    class _IH_Client_CP {}
    
    /**
     * @property _IH_PersonalAccessClient_C|mixed $id
     * @property _IH_PersonalAccessClient_C|mixed $client_id
     * @property _IH_PersonalAccessClient_C|mixed $created_at
     * @property _IH_PersonalAccessClient_C|mixed $updated_at
     * @method _IH_PersonalAccessClient_C client()
     * @method _IH_PersonalAccessClient_C getConnectionName()
     * @method _IH_PersonalAccessClient_C refresh()
     * @method _IH_PersonalAccessClient_C update(array $attributes = [], array $options = [])
     * @method _IH_PersonalAccessClient_C save(array $options = [])
     * @method _IH_PersonalAccessClient_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_PersonalAccessClient_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_PersonalAccessClient_C touch()
     * @method _IH_PersonalAccessClient_C fill(array $attributes)
     * @method _IH_PersonalAccessClient_C delete()
     */
    class _IH_PersonalAccessClient_CP {}
    
    /**
     * @property _IH_RefreshToken_C|mixed $id
     * @property _IH_RefreshToken_C|mixed $access_token_id
     * @property _IH_RefreshToken_C|mixed $revoked
     * @property _IH_RefreshToken_C|mixed $expires_at
     * @method _IH_RefreshToken_C revoke()
     * @method _IH_RefreshToken_C transient()
     * @method _IH_RefreshToken_C accessToken()
     * @method _IH_RefreshToken_C getConnectionName()
     * @method _IH_RefreshToken_C refresh()
     * @method _IH_RefreshToken_C update(array $attributes = [], array $options = [])
     * @method _IH_RefreshToken_C save(array $options = [])
     * @method _IH_RefreshToken_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_RefreshToken_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_RefreshToken_C touch()
     * @method _IH_RefreshToken_C fill(array $attributes)
     * @method _IH_RefreshToken_C delete()
     */
    class _IH_RefreshToken_CP {}
    
    /**
     * @property _IH_Token_C|mixed $id
     * @property _IH_Token_C|mixed $user_id
     * @property _IH_Token_C|mixed $client_id
     * @property _IH_Token_C|mixed $name
     * @property _IH_Token_C|mixed $scopes
     * @property _IH_Token_C|mixed $revoked
     * @property _IH_Token_C|mixed $created_at
     * @property _IH_Token_C|mixed $updated_at
     * @property _IH_Token_C|mixed $expires_at
     * @property _IH_Token_C|mixed $user
     * @method _IH_Token_C revoke()
     * @method _IH_Token_C can(string $scope)
     * @method _IH_Token_C client()
     * @method _IH_Token_C transient()
     * @method _IH_Token_C cant(string $scope)
     * @method _IH_Token_C getConnectionName()
     * @method _IH_Token_C refresh()
     * @method _IH_Token_C update(array $attributes = [], array $options = [])
     * @method _IH_Token_C save(array $options = [])
     * @method _IH_Token_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Token_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Token_C touch()
     * @method _IH_Token_C fill(array $attributes)
     * @method _IH_Token_C delete()
     */
    class _IH_Token_CP {}
}

namespace LaravelIdea\Helper\Laravel\Sanctum {
    
    /**
     * @property _IH_PersonalAccessToken_C|mixed $id
     * @property _IH_PersonalAccessToken_C|mixed $tokenable_id
     * @property _IH_PersonalAccessToken_C|mixed $tokenable_type
     * @property _IH_PersonalAccessToken_C|mixed $name
     * @property _IH_PersonalAccessToken_C|mixed $token
     * @property _IH_PersonalAccessToken_C|mixed $abilities
     * @property _IH_PersonalAccessToken_C|mixed $last_used_at
     * @property _IH_PersonalAccessToken_C|mixed $created_at
     * @property _IH_PersonalAccessToken_C|mixed $updated_at
     * @property _IH_PersonalAccessToken_C|mixed $tokenable
     * @method _IH_PersonalAccessToken_C can(string $ability)
     * @method _IH_PersonalAccessToken_C cant(string $ability)
     * @method _IH_PersonalAccessToken_C refresh()
     * @method _IH_PersonalAccessToken_C update(array $attributes = [], array $options = [])
     * @method _IH_PersonalAccessToken_C save(array $options = [])
     * @method _IH_PersonalAccessToken_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_PersonalAccessToken_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_PersonalAccessToken_C touch()
     * @method _IH_PersonalAccessToken_C fill(array $attributes)
     * @method _IH_PersonalAccessToken_C delete()
     */
    class _IH_PersonalAccessToken_CP {}
}