<?php namespace Orchestra\Contracts\Auth\Command;

interface ThrottlesLogins
{
    /**
     * Determine if the user has too many failed login attempts.
     *
     * @param  array  $input
     *
     * @return bool
     */
    public function hasTooManyLoginAttempts(array $input);

    /**
     * Get the login attempts for the user.
     *
     * @param  array  $input
     *
     * @return int
     */
    public function getLoginAttempts(array $input);

    /**
     * Get total seconds before doing another login attempts for the user.
     *
     * @param  array  $input
     *
     * @return int
     */
    public function getSecondsBeforeNextAttempts(array $input);

    /**
     * Increment the login attempts for the user.
     *
     * @param  array  $input
     *
     * @return int
     */
    public function incrementLoginAttempts(array $input);

    /**
     * Clear the login locks for the given user credentials.
     *
     * @param  array  $input
     *
     * @return void
     */
    public function clearLoginAttempts(array $input);

    /**
     * Get the login attempts cache key.
     *
     * @param  array  $input
     *
     * @return string
     */
    protected function getLoginAttemptsKey(array $input);

     /**
     * Get the login lock cache key.
     *
     * @param  array  $input
     *
     * @return string
     */
    protected function getLoginLockExpirationKey(array $input);
}